<html>


<head>


  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootsnipp-admin.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/custom-style-admin.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  
  <script src="<?php echo base_url();?>js/jquery.js"></script>
  <script src="<?php echo base_url();?>js/bootstrap.min.js"></script> 
  <script src="<?php echo base_url();?>js/bootsnipp-admin.js"></script>

	

</head>




<body>





	<div id="custom-wrapper">






		<div id="custom-header">


      		<a href="index.php"><div id="logo"><img src="<?php echo base_url();?>img/logo.png" alt="LOGO"><h5>GRAB MY CAR</h5></div></a>

			<ul>

				<li><a href="#">Home</a></li>
				<li><a href="#">View Website</a></li>
				<li><a href="#">Settings</a></li>

			</ul>
    






		</div> <!-- end of custom-header -->





		<div id="sidebar">



			<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>

    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="active dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">CMS <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-large"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="<?php echo site_url('admin/slider');?>">Slider</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo site_url('admin/about');?>">About Us</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo site_url('admin/safety_certainty_timing');?>">Safety,Certainty,Timing</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo site_url('admin/cabs_we_provide');?>">Cabs We Provide</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo site_url('admin/costs');?>">Costs</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo site_url('admin/faqs');?>">FAQ's</a></li>


          </ul>
        </li> 


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Requests <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-edit"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="<?php echo site_url('admin/ordered_taxi');?>">Taxi</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo site_url('admin/ordered_car');?>">Rent A Car</a></li>
         
          </ul>
        </li> 



         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lists <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            
          	<li><a href="<?php echo site_url('admin/drivers');?>">All Drivers</a></li>
          	<li class="divider"></li>
	        <li><a href="<?php echo site_url('admin/cars');?>">All Cars</a></li>
          	<li class="divider"></li>
	        <li><a href="<?php echo site_url('admin/cabs');?>">All Cabs</a></li>
        
         
          </ul>
        </li> 




		

        
          <li ><a href="<?php echo site_url('admin/notice');?>">Notice<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-book"></span></a></li>  


        <li ><a href="<?php echo site_url('admin/feedbacks');?>">Feedbacks<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-book"></span></a></li>    
      </ul>
    </div>
  </div>
</nav>

















		</div> <!-- end of sidebar -->





    <?php $this->load->view($admin_content_view_name);?>












    <footer>

      <p>&copy All Rights Reserved CSE311 Group 161ML</p>


    </footer>













  </div> <!-- end of custom-wrapper -->


















</body>
</html>