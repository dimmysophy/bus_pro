<?php 

class Booking_model extends CI_Model {
	
	public function _consruct(){
		parent::_construct();
 	}
		function booking($data){
			$oneways="false";
			$twoways="false";
			 $oneway=$this->count_booking($data['0seat_no'],$data['booking_date'],$data['obus_id'],$data['orout_id']);
			 
			 $insert =0;
			
			 if($data['Rbooking_date']!=''){
				$twoway=$this->count_booking($data['Rseat_no'],$data['Rbooking_date'],$data['Rbus_id'],$data['Rrout_id']); 
				if($twoway!='true'){
				 
					 $insert =$insert+1;
					 $twoways="true";
				 
				
			 } 
			 }
			 if($oneway!='true'){
				 if($data['Rbooking_date']==''){
					  $insert =$insert+2;
					  $oneways="true";
				 }else{
					 $insert =$insert+1;
					 $oneways="true";
				 }
				
			 }
			 if($insert==2){
				 $twoW='null';
				  if($data['Rbooking_date']!=''){
					  $twoW=$this->insert_twowaybooking($data);
				  }
				  $oneW=$this->insert_onewaybooking($data);
				  $table="booking_details";
				  $select_data="*";
				  $where_data = array(
				   'id'     => $oneW
				
			      );
				  $bookingo = $this->get_table_where($select_data, $where_data, $table);
				  $finresult = array( 'status'  => 'success','message' => 'Booking ID','Bookingido'    => $oneW,'BookingidR'    => $twoW,'uneaqueid'    => $bookingo[0]['booking_id']);
				  return $finresult;
			 }else{
				 
				 $finresult = array( 'status'  => 'failed','messageo' => $oneways,'messageR' => $twoways);
				 return $finresult;
			 }
		}
		function payment_sucess($data){
			//var_dump($data['payment_status']);
			 $table = 'booking_details';
            
			  $select_data="*";
			  $where_data = array(
				'id'     => $data['OBookid']
				
			);
			  $bookingR = $this->get_table_where($select_data, $where_data, $table);
			  
				$uneque_id = $bookingR[0]['booking_id']."-".$data['OBookid'];
				 $update_data = array(
				'payment_status'     => $data['payment_status'],
				'status'     => 'Booking',
				'payment_option'     => 'paypal',
				'booking_id'     => $uneque_id
				
			   );
			$datas = $this->update_table_where( $update_data, $where_data, $table);
			
			$where_data = array(
					'order_id'     => $data['OBookid']
					
				);
			$update_data = array(
				
				'booking_id'     => $uneque_id
				
			   );
			$datas = $this->update_table_where( $update_data, $where_data, 'customer_details');
			
		    if($data['RBookid']!=''){
				$where_data = array(
					'id'     => $data['RBookid']
					
				);
				$uneque_id=$bookingR[0]['booking_id']."-".$data['RBookid'];
				$update_data = array(
				'payment_status'     => $data['payment_status'],
				'status'     => 'Booking',
				'payment_option'     => 'paypal',
				'booking_id'     => $uneque_id
				
			   );
				
			$datas = $this->update_table_where( $update_data, $where_data, $table);
			
			
			
			
			$where_data = array(
					'order_id'     => $data['RBookid']
					
				);
			$update_data = array(
				
				'booking_id'     => $uneque_id
				
			   );
			$datas = $this->update_table_where( $update_data, $where_data, 'customer_details');
			
			}
			
			
			
			return true;
		}
		 function update_table_where( $update_data, $where_data, $table){	
			$this->db->where($where_data);
			$this->db->update($table, $update_data);
			return true;
	    } 
		function count_booking($seat,$booking_date,$bus_id,$rout_id){
			
			$this->db->select('i.*,GROUP_CONCAT(  DISTINCT (CONCAT_WS ("<#>",i.seat_no)) SEPARATOR " <=> ") as seat_nos');
			$this->db->from('booking_details i'); 
		
			
			
			$this->db->join('customer_details c', 'c.booking_id=i.id', 'left');
			//$this->db->where("FIND_IN_SET('$seat',i.seat_no) ");
			// $this->db->FIND_IN_SET("c.seat_no , ".$seat."");
			 $this->db->where('i.booking_date', $booking_date);
			 $this->db->where('i.bus_id', $bus_id);
			 $this->db->where('i.rout_id', $rout_id);
			 $this->db->where('i.status', 'Booking');
			 
		   
			
			
			       
			$query = $this->db->get(); 
			$result = $query->result_array();
			$existseat2=array();
			$SET =explode("<=>",$result[0]['seat_nos']);
			foreach($SET as $existseatm){
				
				$existseat5=array_map('trim', explode(',',$existseatm));
				//print_r($existseat5);
				$existseat2=array_merge($existseat2,$existseat5);
				
			}
			$s = explode(",",$seat);
			foreach($s as $f){
			if($existseat2 !=null && in_array($f, $existseat2)){
				return true;
			}
			}
			
		}
		function insert_onewaybooking( $data){	
			$table1 ="booking_details";
			$bid ='TRB'.strtotime(date('m/d/Y H:i:s'));
			$insert_data=array(
				'booking_id'=>$bid ,
				'bus_id'=>$data['obus_id'],
				'rout_id'=>$data['orout_id'],
				'amount'=>$data['oamount'],
				'boarding_point_id'=>$data['oboarding_point_id'],
				'user_id'=>$data['user_id'],
				'booking_date'=>$data['booking_date'],
				'seat_no'=>$data['0seat_no']
				
				
				
			);
			$this->db->insert($table1, $insert_data);
			$last_insert_id = $this->db->insert_id();
			
			$seat = array();
			$no =$data['0seat_no'];
			$seat = explode(',',$no);
			$arr=[];
			for($i=0;$i<count($data['name']);$i++){
				//var_dump($value) ;
				$arr[$i]['customer_name'] =$data['name'][$i];
				$arr[$i]['order_id'] =$last_insert_id ;
				$arr[$i]['age'] =$data['age'][$i];
				$arr[$i]['gender'] =$data['gemder'][$i];
				$arr[$i]['mobile'] =$data['mobile'];
				$arr[$i]['email'] =$data['email'];
				$arr[$i]['booking_id'] =$bid ;
				$arr[$i]['seat_no'] =$seat[$i] ;
				
			}
			//var_dump($arr);
			//exit;
			$table ="customer_details";
			$this->db->insert_batch($table, $arr);
			return $last_insert_id;
	    }
		function insert_twowaybooking( $data){	
			$table1 ="booking_details";
			$bid ='TRB'.strtotime(date('m/d/Y H:i:s'));
			$insert_data=array(
				'booking_id'=>$bid ,
				'bus_id'=>$data['Rbus_id'],
				'rout_id'=>$data['Rrout_id'],
				'amount'=>$data['Ramount'],
				'boarding_point_id'=>$data['Rboarding_point_id'],
				'user_id'=>$data['user_id'],
				'booking_date'=>$data['Rbooking_date'],
				'seat_no'=>$data['Rseat_no']
				
				
				
			);
			$this->db->insert($table1, $insert_data);
			$last_insert_id = $this->db->insert_id();
			
			$seat = array();
			$no =$data['Rseat_no'];
			$seat = explode(',',$no);
			$arr='';
			for($i=0;$i<count($data['name']);$i++){
				//var_dump($value) ;
				$arr[$i]['customer_name'] =$data['name'][$i];
				$arr[$i]['order_id'] =$last_insert_id ;
				$arr[$i]['age'] =$data['age'][$i];
				$arr[$i]['gender'] =$data['gemder'][$i];
				$arr[$i]['mobile'] =$data['mobile'];
				$arr[$i]['email'] =$data['email'];
				$arr[$i]['booking_id'] =$bid ;
				$arr[$i]['seat_no'] =$seat[$i] ;
				
			}
			//var_dump($arr);
			//exit;
			$table ="customer_details";
			$this->db->insert_batch($table, $arr);
			return $last_insert_id;
	    }
        function get_table_where( $select_data, $where_data, $table){
        
			$this->db->select($select_data);
			$this->db->where($where_data);
			$query  = $this->db->get($table);  //--- Table name = User
			$result = $query->result_array(); 
			return $result;	
        }		
		  function mail_details( $data){
			  
			  $this->db->select('a.username,c.bus_name,b.booking_id,f.	board_point,f.drop_point,f.board_time,b.booking_date,b.amount,GROUP_CONCAT(  DISTINCT (CONCAT_WS ("<#>",d.customer_name,d.age,d.gender,d.seat_no)) SEPARATOR " <=> ") as customer,GROUP_CONCAT(  DISTINCT (CONCAT_WS ("<#>",d.email)) SEPARATOR " <=> ") as email');
			$this->db->from('user a'); 
		
			//$this->db->join('bus b', 'i.bus_id=b.id', 'left');
			$this->db->join('booking_details b', 'b.user_id=a.id', 'left');
			$this->db->join('bus c', 'b.bus_id=c.id', 'left');
			$this->db->join('customer_details d', 'd.order_id=b.id', 'left');
			
			$this->db->join('route f', 'b.rout_id=f.id', 'left');
			
			
			
			
			
			$this->db->where('b.id',$data);
			 
		   
			
			
			       
			$query = $this->db->get(); 
			$result = $query->result_array();
		 
			return $result;
		  }
		  function mail_details_bookingID( $data){
			  
			  $this->db->select('a.username,c.bus_name,b.booking_id,f.	board_point,f.drop_point,f.board_time,b.booking_date,b.amount,GROUP_CONCAT(  DISTINCT (CONCAT_WS ("<#>",d.customer_name,d.age,d.gender,d.seat_no)) SEPARATOR " <=> ") as customer,b.seat_no ,g.pickup_point,COUNT("d.booking_id") AS count,GROUP_CONCAT(  DISTINCT (CONCAT_WS ("<#>",d.email)) SEPARATOR " <=> ") as email');
			$this->db->from('user a'); 
		
			//$this->db->join('bus b', 'i.bus_id=b.id', 'left');
			$this->db->join('booking_details b', 'b.user_id=a.id', 'left');
			$this->db->join('bus c', 'b.bus_id=c.id', 'left');
			$this->db->join('customer_details d', 'd.order_id=b.id', 'left');
			
			$this->db->join('route f', 'b.rout_id=f.id', 'left');$this->db->join('board_points g', 'g.board_point=f.id', 'left');
			
			
			
			
			
			$this->db->where('b.booking_id',$data);
			 
		   
			
			
			       
			$query = $this->db->get(); 
			$result = $query->result_array();
		 
			return $result;
		  }
    }  