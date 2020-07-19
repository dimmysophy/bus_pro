<?php
$sitename = '';
//print_r($_SESSION[0]);
	$base_url = $this->request->webroot."../../../";
?>
<html>
	<?php
  include('header-script.php');
  
  ?>
  <style>
  #actions-sidebar{display:none;}
  table{
	      border-collapse: separate !important;

    clear: both;
    margin-top: 6px !important;
    margin-bottom: 6px !important;
    max-width: none !important;

    border: 1px solid #f4f4f4;
    width: 100%;

  }
  th{
	  		    padding: 8px;

	  position: relative;
    border-bottom-width: 2px;
    border: 1px solid #f4f4f4;
  }
  th>a{
	  color:black
  }
  th:after{
	      opacity: 0.2;
    content: "\e150";
	    position: absolute;
    top: 8px;
    right: 8px;
    display: block;
    font-family: 'Glyphicons Halflings';
    opacity: 0.5;
  }
  tr{    display: table-row;
    vertical-align: inherit;
    border-color: inherit;
	    
}
tr:nth-child(even){
	background-color: #f9f9f9;
	}
	td{
		    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
	}
	input, select{
		display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
} button{    border-radius: 3px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid transparent;
	display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
	margin:10px;
	}
  </style>
  <body class="hold-transition skin-red pace-done sidebar-mini">
  	<div class="wrapper">
	  <?php
	  include('header-menu.ctp');
	  //include('left-menu.php');
	  include('left-menu-old.php');
	  
?>	  
	  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?= $this->fetch('title');?>
            <small></small>
          </h1>
    
        </section>
		 <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-xs-12">

			<?= $this->Flash->render();?>
			</div>
                   
				   
			<div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title"><?= $this->fetch('title');?></h3></div>
		<?= $this->fetch("content");?>
		
		</div>
		</div>
		</div>
		</section>
		</div>
		<?php

	  include('footer.php');
      ?>    
    
	</div>
  <?php
  include('footer-script.php');
  ?>
  </body>
</html>