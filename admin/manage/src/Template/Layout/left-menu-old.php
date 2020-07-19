<?php  
     $menu = $current_user['admin'];
?>  
  <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
		  
	<div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo  $current_user['profile_pic']; ?>" class="user-image left-sid" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $current_user['logged_in_admin']['username']; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
		  
          <!-- sidebar menu: : style can be found in sidebar.less -->
             <ul class="sidebar-menu">
			 
			 
			       <li class="treeview">
					  <a href="#">
						<i class="fa fa-bus"></i> <span>Bus Management</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="<?php echo $this->request->webroot?>../Bus_details/view_busdetails"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="<?php echo $this->request->webroot?>../Bus_details/add_busdetails"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
						<li><a href="<?php echo $this->request->webroot?>../Bus_details/view_bustypedetails"><i class="fa fa-circle-o text-aqua"></i>Add Bus Type</a></li>
					  </ul>
                   </li>
                   
				   <li class="treeview">
					  <a href="#">
						<i class="fa fa-thumb-tack"></i> <span>Terminals</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="<?php echo $this->request->webroot;?>terminals"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="<?php echo $this->request->webroot;?>terminals/add"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
					  </ul>
                   </li>
				   
				   
			       <li class="treeview">
					  <a href="#">
						<i class="fa fa-arrows-v"></i> <span>Route Details</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="<?php echo $this->request->webroot?>../Route_details/view_routedetails"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="<?php echo $this->request->webroot?>../Route_details/add_routedetails"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
					  </ul>
                   </li>
				    
						
				
				   
				    <li class="treeview">
					  <a href="#">
						<i class="fa fa-hand-o-up"></i> <span>Board Point Details</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="<?php echo $this->request->webroot?>../Borderpoint_details/view_borderdetails"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="<?php echo $this->request->webroot?>../Borderpoint_details/add_boardpointdetails"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
					  </ul>
                   </li>
				   
				         <li>
                            <a href="#">                     
							<i class="fa fa-tint" aria-hidden="true"></i>
                            <span>Drop Point Details</span><i class="fa fa-angle-left pull-right"></i> </a>
							<ul class="treeview-menu">
							<li><a href="<?php echo $this->request->webroot?>../Droppoint_details/view_dropdetails"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
							<li><a href="<?php echo $this->request->webroot?>../Droppoint_details/add_droppointdetails"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
						  </ul>
                        </li>
			
				   
				   
				  
				        <li>
                            <a href="<?php echo $this->request->webroot ?>../gallery_details/add_gallery"><i class="glyphicon glyphicon-picture"></i><span>Gallery</span></a>
                        </li>
					
					 <?php
                       if( $menu==1  )
                        {
                       ?>	
						
						 <li class="treeview">
					  <a href="#">
						<i class="fa fa-asterisk" aria-hidden="true"></i><span>Agent</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="<?php echo $this->request->webroot?>../Agent_details/view_Agent_details"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="<?php echo $this->request->webroot?>../Agent_details/add_agent_details"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
					  </ul>
                   </li>
<?php
						} 
						?>
                     
					  <?php
                       if( $menu==1  )
                        {
                       ?>
					   <li>
                            <a href="<?php echo $this->request->webroot ?>../Settings_details/view_settings"><i class="fa fa-wrench" aria-hidden="true"></i><span>Settings</span></a>
                        </li>
						<?php
						} 
						?>
						
						<li>
                           <a href="#">                     
							<i class="fa fa-ban" aria-hidden="true"></i><span>Cancellation</span><i class="fa fa-angle-left pull-right"></i> </a>
							<ul class="treeview-menu">
							<li><a href="<?php echo $this->request->webroot?>../Cancellation_details/view_cancellation"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
							<li><a href="<?php echo $this->request->webroot?>../Cancellation_details/add_cancellation"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
						  </ul>
                        </li>
						
						
						<li>
						   <a href="<?php echo $this->request->webroot ?>../Booking_details/view_bookingdetails"><i class="fa fa-book" aria-hidden="true"></i><span>Booking Details</span></a>                     
                        </li>
						

					   <li>
							<a href="<?php echo $this->request->webroot ?>../seat_layout/index"><i class="fa fa-crosshairs" aria-hidden="true"></i>
							<span>Seat Layout</span></a>
                      </li>
                     <li>
						   <a href="<?php echo $this->request->webroot ?>../Rating_details/view_ratingdetails"><i class="fa fa-star" aria-hidden="true"></i><span>Rating</span></a>                     
                      </li>	
						<li class="treeview">
					  <a href="#">
						<i class="fa fa-tag"></i> <span>Agent Terminals</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="<?php echo $this->request->webroot;?>agent-terminal"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="<?php echo $this->request->webroot;?>agent-terminal/add"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
					  </ul>
                   </li>
				   
				   <li class="treeview">
					  <a href="#">
						<i class="fa fa-hand-peace-o"></i> <span>Bus Count</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="<?php echo $this->request->webroot;?>bus-count"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="<?php echo $this->request->webroot;?>bus-count/add"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
					  </ul>
                   </li>
				   
				   <li class="treeview">
					  <a href="#">
						<i class="fa fa-hourglass-2"></i> <span>Bus State</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="<?php echo $this->request->webroot;?>bus-state"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="<?php echo $this->request->webroot;?>bus-state/add"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
					  </ul>
                   </li>
				   
				   <li class="treeview">
					  <a href="#">
						<i class="fa fa-area-chart"></i> <span>Excesses</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="<?php echo $this->request->webroot;?>excess"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="<?php echo $this->request->webroot;?>excess/add"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
					  </ul>
                   </li>
				   
				   <li class="treeview">
					  <a href="#">
						<i class="fa fa-area-chart"></i> <span>Requests</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="<?php echo $this->request->webroot;?>requests"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="<?php echo $this->request->webroot;?>requests/add"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
					  </ul>
                   </li>
				   
				   <li class="treeview">
					  <a href="#">
						<i class="fa fa-map-marker"></i> <span>Locations</span><i class="fa fa-angle-left pull-right"></i>
					  </a>
					  <ul class="treeview-menu">
						<li><a href="<?php echo $this->request->webroot;?>location-graph"><i class="fa fa-circle-o text-aqua"></i>View All</a></li>
						<li><a href="<?php echo $this->request->webroot;?>location-graph/add"><i class="fa fa-circle-o text-aqua"></i>Add New</a></li>
					  </ul>
                   </li>
             </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
