<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Email\Email;
/**
 * Bus Controller
 *
 * @property \App\Model\Table\BusTable $Bus
 *
 * @method \App\Model\Entity\Bus[] paginate($object = null, array $settings = [])
 */
class ProcessController extends AppController
{
	
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    { 
	$connection = ConnectionManager::get('default');

	$sameBus = [];
	$data = true;
	//if($data == true){
					//echo "we are good";
			
			$return = count($sameBus) || 1;

		$this->set('return', $return);
		$routes = TableRegistry::get('route');
		$booking_details = TableRegistry::get('booking_details');
		$bus = TableRegistry::get('bus');
		$today =  date('d-m-Y');
		$current_time = time();
		$next_hr = strtotime("+60 Minutes");;
		//get all journeys scheduled for today
		/*query builder starts here
		$travels_today = $booking_details->find()
		->select("count(customer_details.id) as current_passengers, booking_details.bus_id as current_bus_id, route.id as current_route_id, route.board_point as source,route.drop_point as destination, route.board_time, bus.max_seats")
		->join([
            'route' => [
                'table' => 'route',
                'type' => 'INNER',
                'conditions' => 'booking_details.rout_id = route.id'
				], 
			
			'bus' => [
				'table' => 'bus',
				'type' => 'INNER',
				'conditions' => 'booking_details.bus_id = bus.id'
				],
			'customer_details' => [
				'table' => 'customer_details',
				'type' => 'INNER',
				'conditions' => 'booking_details.booking_id = customer_details.booking_id'
				]
			])
		->where(['booking_date'=> "$today"])
		->where(["(route.board_time between CURTIME() and date_add(curtime(), interval 1 hour)) "])
		->having('count(customer_details.id) < (max_seats / 2)')
		->group('current_route_id');
		
		//->all();
		query builder ends here */
		//check if any journey has been booked for today and return null if none
		$sql = "SELECT 
		  count(customer_details.id) as current_passengers, 
		  booking_details.bus_id as current_bus_id, 
		  route.id as current_route_id, 
		  route.board_point as source, 
		  route.drop_point as destination, 
		  route.board_time as board_time, 
		  bus.max_seats AS max_seats,
		  curtime()
		FROM 
		  booking_details booking_details 
		  INNER JOIN route route ON booking_details.rout_id = route.id 
		  INNER JOIN bus bus ON booking_details.bus_id = bus.id 
		  INNER JOIN customer_details customer_details ON booking_details.booking_id = customer_details.booking_id 
		WHERE 
		  (
			booking_date = '".$today."' 
			
			AND (
			  route.board_time between CURTIME() 
			  and date_add(
				curtime(), 
				interval 4 hour
			  )
			)
		  ) 
		GROUP BY 
		  current_route_id 
		HAVING 
		  count(customer_details.id) < (max_seats / 2)";
  
  $travels_today = $connection->execute($sql)->fetchAll('assoc');
  
		
		if(count($travels_today) < 1 ){
			//var_dump($travels_today);
			//return;
		}
		$this->set('journeys', $travels_today);
		//collect for each of these buses that the passengers can be moved, check if there are other buses going from the same source to destination
		foreach ($travels_today as $current_bus){
			//find eligible route
			/*$eligible_routes = $this->routes->find()->select('route.id as route_id, route.bus_id as bus_id, bus.max_seats as capacity, route.board_time')->join([	
			'bus' => [
				'table' => 'bus',
				'type' => 'INNER',
				'conditions' => 'route.bus_id = bus.id'
				]
				])->where(['route.board_point' => $current_bus['source'], 'route.drop_point' => $current_bus['destination'],'route.board_time between date_add(cast("
        '.$current_bus['board_time'].'" as time), 
        interval 1 minute
      )  and "24:00:00"'])->all();
	  */
	  $sql = "SELECT 
			  route.id as route_id, 
			  route.bus_id as bus_id, 
			  bus.max_seats as capacity, 
			  route.board_time AS board_time 
			FROM 
			  route route 
			  INNER JOIN bus bus ON route.bus_id = bus.id 
			WHERE 
			  (
				route.board_point = '".$current_bus['source']."' 
				AND route.drop_point = '".$current_bus['destination']."' 
				AND route.board_time between date_add(
				  cast('".$current_bus['board_time']."' as time), 
				  interval 1 minute
				) 
				and '24:00:00'
			  )";
  $eligible_routes = $connection->execute($sql)->fetchAll('assoc');
	  
	  $this->set(compact('eligible_routes'));
			
			if(count($eligible_routes) < 1){
				//return null;
			}
			//check booked capacity of eligible route
			foreach($eligible_routes as $route){
				//check if it has capacity to enter all preempted passengers
				/*
				$has_capacity = $booking_details->find()
				->select("count(booking_details.id) as passengers_count, route.id, route.bus_id, max_seats")
				->join([
					'route' => [
						'table' => 'route',
						'type' => 'INNER',
						'conditions' => 'booking_details.rout_id = route.id'
						], 
					'bus' => [
						'table' => 'bus',
						'type' => 'INNER',
						'conditions' => 'booking_details.bus_id = bus.id'
						]
					])->having("bus.max_seats > ".$current_bus['current_passengers']." + count(booking_details.id)")
					->where("booking_details.rout_id = ".$route['route_id'])->first();
					 */
					 $sql = "SELECT 
							  count(booking_details.id) as passengers_count, 
							  route.id, 
							  route.bus_id, 
							  max_seats 
							FROM 
							  booking_details booking_details 
							  INNER JOIN route route ON booking_details.rout_id = route.id 
							  INNER JOIN bus bus ON booking_details.bus_id = bus.id 
							WHERE 
							  (booking_details.rout_id = ".$route['route_id'].") 
							HAVING 
							  bus.max_seats > ".$current_bus['current_passengers']." + count(booking_details.id) 
							LIMIT 1";
					$has_capacity = $connection->execute($sql)->fetchAll('assoc');
					$this->set(compact('has_capacity'));

				// if we find one that has the capacity to take all passengers, then we can then begin to move the passengers	with current route_id to the new route
				$has_capacity = $has_capacity[0];
				if(isset($has_capacity['id'])){
					//echo "here";
					$new_route_id = $has_capacity['id'];
					$new_bus_id = $has_capacity['bus_id'];
					$old_route_id = $current_bus['current_route_id'];
					$new_board_time = $route['board_time'];
					// we 1st need to record the movements to another table before we update in order to remember
					
					//to do this, we will find all those booking details belonging to this particular bus and going today
					
					$seats = $booking_details->find()->where(['rout_id' => $old_route_id , 'booking_date' => $today])
					->join([
					'customer_details' => [
						'table' => 'customer_details',
						'type' => 'INNER',
						'conditions' => 'booking_details.booking_id = customer_details.booking_id'
						]
						]) ;
						
						$sql = "SELECT 
								  email, booking_details.user_id, booking_details.id, rout_id
								FROM 
								  booking_details booking_details 
								  INNER JOIN customer_details customer_details ON booking_details.booking_id = customer_details.booking_id 
								WHERE 
								  (
									rout_id = ".$old_route_id." 
									AND booking_date = '".$today."'
								  )";
						$seats = $connection->execute($sql)->fetchAll('assoc');
					$this->set(compact('seats'));
					
					//so we insert their details to the moved table
					foreach($seats as $seat){
						$move = $this->moved->newEntity(['user_id' => $seat['user_id'], 'booking_detail_id' => $seat['id'], 'old_route_id' =>$old_route_id, 'new_route_id' =>  $new_route_id]);
					
						$this->moved->save($move);
					
					//now that we have recorded movement of the moved passengers, we can then go ahead and update their records in the booking details
						$booking = $booking_details->get($seat['id']);
						$update = ['rout_id' => $new_route_id, 'bus_id' => $new_bus_id];
						//$seat->rout_id = $new_route_id;
						//$seat->bus_id = $new_bus_id;
						$change = $booking_details->patchEntity($booking, $update);
						$booking_details->save($change); 
					
					
					// notify the passenger by mail that he has been moved sending him new take off time
					echo "send to ". $seat['email'];
					$email = new Email();
					$email->transport('default');

						try {
							$res = $email->from('noreply@localhost.com')
								  ->to([$seat['email'] => 'Customer'])
								  ->subject('Booking Moved Up')                   
								  ->send("your booking has been moved up, sorry for the inconvenience, new board time = $new_board_time ");

						} catch (Exception $e) {

							echo 'Exception : ',  $e->getMessage(), "\n";

						}
						echo 'some passengers have been moved';
						//return;
					}
				}
				else{
					//return null;
				}
			}
		}
		
		
		
		
			//if($user_moved){
				//change the status of the bus to false
				
				
				//add this terminal to those who have excess if it does not exist
				
			//}
			
		
		
		
		//if(iterator)
		
	
	
	
		$data = $this->request->getData('check');
        

    }
	
	public function locationGraph(){
		
	}

    
}
