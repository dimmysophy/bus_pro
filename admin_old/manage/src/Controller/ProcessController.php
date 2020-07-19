<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
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
	$sameBus = [];
	$data = true;
	//if($data == true){
		$routes = TableRegistry::get('route');
		$booking_details = TableRegistry::get('booking_details');
		$bus = TableRegistry::get('bus');
		$today =  date('d-m-Y');
		$current_time = time();
		$next_hr = strtotime("+60 Minutes");;
		//get all journeys scheduled for today
		$travels_today = $booking_details->find()
		->select("count('booking_details.id) as current_passengers, booking_details.bus_id as current_bus_id, route.id as current_route_id, route.board_point as source,route.drop_point as destination, route.board_time, bus.max_seats')")
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
			])
		->where(['booking_date'=> "$today"])
		->where(['board_time'=> "between $current_time and $next hr"])
		->where(['current_passengers'=> "< max_seats / 2"])
		->all();
		
		//check if any journey has been booked for today and return 0 if none
		
		if(count($travels_today) < 1 ){
			return 0;
		}
		
		//collect for each of these buses that the passengers can be moved, check if there are other buses going from the same source to destination
		foreach ($travels_today as $current_bus){
			//find eligible route
			$eligible_routes = $this->routes->find()->select('route.id as route_id, route.bus_id as bus_id, bus.max_seats as capacity, board_time')->where(['board_point' => $current_bus->source, 'drop_point' => $current_bus->destination, 'board_time' => " > $current_bus->board_time"] )->all();
			
			if(count($eligible_routes) < 1){
				return 0;
			}
			//check booked capacity of eligible route
			foreach($eligibe_routes as $route){
				//check if it has capacity to enter all preempted passengers
				$has_capacity = $booking_details->find()
				->select("count('booking_details.id) as passengers_count, route.id, route.bus_id")->where("max_seats > $current_bus->current_passengers + passengers_count and rout_id = $route.route_id")
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
					])->first();
					 ;
				// if we find one that has the capacity to take all passengers, then we can then begin to move the passengers	with current route_id to the new route
				if(isset($has_capacity->id)){
					$new_route_id = $has_capacity->id;
					$new_bus_id = $has_capacity->bus_id;
					$old_route_id = $current_bus->current_route_id;
					$new_board_time = $route->board_time;
					// we 1st need to record the movements to another table before we update in order to remember
					
					//to do this, we will find all those booking details belonging to this particular bus and going today
					
					$seats = $booking_details-> find()->where(['rout_id' => $old_route_id , 'booking_date' => $today])->join([
					'route' => [
						'table' => 'customer_details',
						'type' => 'INNER',
						]
						]) ;
					
					
					//so we insert their details to the moved table
					foreach($seats as $seat){
						$move = $this->moved->newEntity(['user_id' => $seat->user_id, 'booking_detail_id' => $seat->id, 'old_route_id' =>$old_route_id, 'new_route_id' =>  $new_route_id]);
					
						$this->moved->save();
					
					//now that we have recorded movement of the moved passengers, we can then go ahead and update their records in the booking details
						$seat->rout_id = $new_route_id;
						$seat->bus_id = $new_bus_id;
						$change = $booking_details->newEntity($seat);
						$booking_details->save($change); 
					}
					
					// notify the passenger by mail that he has been moved sending him new take off time
					$email = new Email();
					$email->transport('default');

						try {
							$res = $email->from('noreply@localhost.com')
								  ->to([$seat->email => 'Customer'])
								  ->subject('Booking Moved Up')                   
								  ->send("your booking has been moved up, sorry for the inconvenience, new board time = $new_board_time ");

						} catch (Exception $e) {

							echo 'Exception : ',  $e->getMessage(), "\n";

						}
						echo 'some passengers have been moved';
						return;
				}
				else{
					return 0;
				}
			}
		}
		
		
		
		
			if($user_moved){
				//change the status of the bus to false
				
				
				//add this terminal to those who have excess if it does not exist
				
			}
			
		
		
		
		//if(iterator)
		
	
	
	
		$data = $this->request->getData('check');
        
			//echo "we are good";
			
			//echo $today;
			//echo date('H:i');
			$minute = date('i');
			
			$return = count($sameBus);
		//}
		$this->set('return', $return);
    }
	
	public function locationGraph(){
		
	}

    
}
