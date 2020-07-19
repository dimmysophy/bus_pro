<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Bus Details
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-bus"></i>Home</a></li>
         <li><a href="#">Bus Details</a></li>
         <li class="active">Edit Bus</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
            <?php
               if($this->session->flashdata('message')) {
               $message = $this->session->flashdata('message');
               ?>
            <div class="alert alert-<?php echo $message['class']; ?>">
               <button class="close" data-dismiss="alert" type="button">×</button>
               <?php echo $message['message']; ?>
            </div>
            <?php
               }
               ?>
         </div>
         <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-warning">
               <div class="box-header with-border">
                  <h3 class="box-title">Edit Bus Details</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="" method="post"  class="validate" enctype="multipart/form-data">
                  <div class="box-body">                 
                     <div class="col-md-6">
					 
					      <div class="form-group has-feedback">
                           <label for="exampleInputEmail1">Bus Name</label>
                            <input type="text" class="form-control required" value="<?php echo $data->bus_name; ?>" data-parsley-trigger="change"	
                            data-parsley-minlength="2" data-parsley-maxlength="15" data-parsley-pattern="^[a-zA-Z\  \/]+$" required="" name="bus_name"  placeholder="Bus Name">
                           <span class="glyphicon  form-control-feedback"></span>
                        </div> 
						
						
					     <div class="form-group">
                        <label>Bus Type</label>
							<select class="form-control select2"  style="width: 100%;" name="bus_type_id" >
								   <?php
								   if($result) {
									  foreach($result as $bustypedetails){
										  $s = ($bustypedetails->id == $data->bus_type_id) ? "selected" : "";
										
								   ?>
            <option <?php echo $s; ?> value="<?php echo $bustypedetails->id;?>"><?php echo $bustypedetails->bus_type; ?></option>
								   <?php
								   }
								   }
								   ?>
                            </select>
                        </div>					
						<div class="form-group has-feedback">
                           <label for="exampleInputEmail1">Start Point</label>
                           <input type="text" class="form-control required" name="board_point" 
						   value="<?php echo $data->board_point; ?>" data-parsley-trigger="change"	
                           data-parsley-minlength="2" data-parsley-maxlength="15" data-parsley-pattern="^[a-zA-Z0-9\  \/]+$" required="" placeholder="Start Point">
                           <span class="glyphicon  form-control-feedback"></span>
                        </div>
						
						 <div class="bootstrap-timepicker">
							<div class="form-group">
							  <label>Start Time</label>
							  <div class="input-group">
								<input type="text" name="board_time" value="<?php echo $data->board_time; ?>" class="form-control timepicker">
								<div class="input-group-addon">
								  <i class="fa fa-clock-o"></i>
								</div>
							  </div><!-- /.input group -->
							</div><!-- /.form group -->
						  </div>
						  
					
						  
						<div class="form-group">
                        <label>Amenities</label>
							<select class="form-control select2 js-example-basic-multiple"  multiple="multiple" style="width: 100%;" name="amenities_id[]" id="amenities">
								   <?php
									  $arry_select = explode(",", $data->amenities_id);
									  foreach($amenitiesresult as $amenitiedetails){
								   ?>
			            <option value="<?php echo $amenitiedetails->id;?>"<?php if (in_array($amenitiedetails->id, $arry_select))
					    echo 'selected';  ?> ><?php echo $amenitiedetails->amenities;?></option>			  
								   <?php
								   }
								   ?>
                            </select>
                       </div>	                 			   
					    
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
				   </div>
				   <div class="col-md-6">
				   
				        <div class="form-group has-feedback">
                           <label for="exampleInputEmail1">Bus RegiNumber</label>
                           <input type="text" class="form-control required" name="bus_reg_no" value="<?php echo $data->bus_reg_no; ?>"data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-maxlength="15"  required="" placeholder="Bus RegiNumber">
                           <span class="glyphicon  form-control-feedback"></span>
                        </div>
						
						 <div class="form-group has-feedback">
                           <label for="exampleInputEmail1">Maximum Seats</label>
                           <input type="text" class="form-control required" name="max_seats" value="<?php echo $data->max_seats; ?>"
						   data-parsley-trigger="change" required="" placeholder="Maximum Seats">
                           <span class="glyphicon  form-control-feedback"></span>
                        </div> 
						
						  	<div class="form-group has-feedback">
                           <label for="exampleInputEmail1">End Point</label>
                           <input type="text" class="form-control required" name="drop_point" value="<?php echo $data->drop_point; ?>"data-parsley-trigger="change"	data-parsley-minlength="2" data-parsley-maxlength="15" required="" placeholder="End Point">
                           <span class="glyphicon  form-control-feedback"></span>
                        </div>
						
						  <div class="bootstrap-timepicker">
							<div class="form-group">
							  <label>Arrival Time</label>
							  <div class="input-group">
								<input type="text" name="drop_time" value="<?php echo $data->drop_time; ?>" class="form-control timepicker">
								<div class="input-group-addon">
								  <i class="fa fa-clock-o"></i>
								</div>
							  </div><!-- /.input group -->
							</div><!-- /.form group -->
						  </div>
				   </div>
				   
				  </div>
               </form>
            </div>
            <!-- /.box -->
         </div>
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>

