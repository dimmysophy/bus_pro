<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
   
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
		
		 $this->load->model('booking_model');
		 
 	}
	
	public function index()
	{
		$template['page'] = "Payment/payment";
		$template['page_title'] = "Book Ticket - Customer Information";
		$template['logo'] = get_settings_details(1);
		$this->load->view('template', $template);
	}
	public function userDetails() {
		$data = $_POST;
                //var_dump($data);
		$result = $this->booking_model->booking($data);
		//var_dump($result);
                
		echo json_encode($result);
		
	}
	public function result()
	{
		$template['page'] = "Payment/result_paypal";
		$template['page_title'] = "Book Ticket - Customer Information";
		$template['logo'] = get_settings_details(1);
		$this->load->view('template', $template);
	}
	public function new_window()
	{
		$id =$this->uri->segment(3);
		
		$onewayDetails=$this->booking_model->mail_details_bookingID($id);
		
			$template['result']=$onewayDetails;
		
		    $this->load->view('Pdf/pdfreport', $template);
		
		
		
	}
	
public function cancel()
	{
		$template['page'] = "Payment/cancel_paypal";
		$template['page_title'] = "Book Ticket - Customer Information";
		$template['logo'] = get_settings_details(1);
		$this->load->view('template', $template);
	}
	public function email_notification() {
		
		$data = $_POST;
		$onewayDetails=$this->booking_model->mail_details_bookingID($data['id']);
		
		if($onewayDetails[0]['username']==NULL){
			$finresult = array( 'status'  => 'failed','message' => 'error','code'    => 'error');
         print json_encode( $finresult );
			
		}else{
			if($data['type']=='email'){
				
				$s = $this->booking_details($onewayDetails);
				
			}
			$result = array( 'status'  => 'success','message' => 'Successfully registered','code'    => 'email');
		          print json_encode( $result );
			
		}
	}
		public function payment_sucess() {
		$data = $_POST;
		
		$result = $this->booking_model->payment_sucess($data);
		 
            if($result==true){
				if($data['RBookid']!=''){
					$twowayDetails=$this->booking_model->mail_details($data['RBookid']);
				
				$s = $this->booking_details($twowayDetails);
				}
				$onewayDetails=$this->booking_model->mail_details($data['OBookid']);
				
				$s = $this->booking_details($onewayDetails);
			}
		print json_encode( $result);
	}
	
	public function booking_details($data)
	{
		$finresult    = get_settings_details(1);
        
         $from= $finresult->smtp_username;
         $name=$finresult->title;
         $s =base_url();
         $sub="Booking_details";
         $email=$data[0]['email'];
		 $template['data']=$data;
         $msg=$this->load->view('Email/booking_detail', $template, true);
		 
         
         $send = send_mail($from,$name,$email,$sub,$msg);
         if( $send ){ // check if user exist or not
              
                return true;
            }
	}
	public function checkout()
	{
	
		try {	
			
			require_once(APPPATH.'libraries/Stripe/lib/Stripe.php');//or you
			Stripe::setApiKey("sk_test_OOBAAYHcf1dTbYjfFiOH5QTF"); //Replace with your Secret Key
 
			$charge = Stripe_Charge::create(array(
				"amount" => $this->uri->segment(3)*100 ,
				"currency" => "usd",
				"card" => $_POST['stripeToken'],
				"description" => "Demo Transaction"
			));
			var_dump($charge);
			echo "<h1>Your payment has been completed.</h1>";	
		}
 
		catch(Stripe_CardError $e) {
 
		}
		catch (Stripe_InvalidRequestError $e) {
 
		} catch (Stripe_AuthenticationError $e) {
		} catch (Stripe_ApiConnectionError $e) {
		} catch (Stripe_Error $e) {
		} catch (Exception $e) {
		}
	}
 
	function paytmpost()
{
 header("Pragma: no-cache");
 header("Cache-Control: no-cache");
 header("Expires: 0");

 // following files need to be included
 require_once(APPPATH . "/third_party/paytmlib/config_paytm.php");
 require_once(APPPATH . "/third_party/paytmlib/encdec_paytm.php");

 $checkSum = "";
 $paramList = array();

 $ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];

// Create an array having all required parameters for creating checksum.
 $paramList["MID"] = 'Omegan10335807669307';
 $paramList["ORDER_ID"] = $ORDER_ID;
 $paramList["CUST_ID"] = $CUST_ID;
 $paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
 $paramList["CHANNEL_ID"] = $CHANNEL_ID;
 $paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
 $paramList["WEBSITE"] = "Omweb";

 /*
 $paramList["MSISDN"] = $MSISDN; //Mobile number of customer
 $paramList["EMAIL"] = $EMAIL; //Email ID of customer
 $paramList["VERIFIED_BY"] = "EMAIL"; //
 $paramList["IS_USER_VERIFIED"] = "YES"; //

 */

//Here checksum string will return by getChecksumFromArray() function.
 $checkSum = getChecksumFromArray($paramList,'Gg3ntMLD!YRHqm_6');
 
 ?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>
<?php 
 } 
}