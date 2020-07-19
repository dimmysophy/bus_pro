<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cancellation extends CI_Controller {

	public function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		
 	}
	public function index(){
		$template['page'] = 'Cancellation/cancellation';
		$template['page_title'] = ":Cancel your Bus Tickets  | Online Bus Ticket Booking, Book Volvo AC Bus Tickets, Reservation";
		$template['logo'] = get_settings_details(1);
		
		$this->load->view('template',$template);
	
	}
}