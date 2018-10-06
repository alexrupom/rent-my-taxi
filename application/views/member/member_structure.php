<html>


<head>


	  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	  <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>

	  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootsnipp-member.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/custom-style-member.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/lightbox.min.css">
	  
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	  
	  <script src="<?php echo base_url();?>js/jquery.js"></script>
	  <script src="<?php echo base_url();?>js/bootstrap.min.js"></script> 
	  <script src="<?php echo base_url();?>js/bootsnipp-member.js"></script>
	

</head>




<body>


	<div id="custom-wrapper">



		<header>

			<h3>Hey Doe, How Are You Doing Today... </h3>


		</header>












		<div id="custom-sidebar">


			<div class="row">

			    <!-- uncomment code for absolute positioning tweek see top comment in css -->
			    <!-- <div class="absolute-wrapper"> </div> -->
			    <!-- Menu -->
			    <div class="side-menu">
			    
			    <nav class="navbar navbar-default" role="navigation">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			        <div class="brand-wrapper">
			            <!-- Hamburger -->
			            <button type="button" class="navbar-toggle">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>

			            <!-- Brand -->

			        </div>

			    </div>

			    <!-- Main Menu -->
			    <div class="side-menu-container">

			        <ul class="nav navbar-nav">


			            <li class="active"><a href="<?php echo site_url('members/index/'.$r->member_id);?>"><span class="glyphicon glyphicon-home"></span> My Profile</a></li>
			            
			            <li><a href="<?php echo site_url('members/my_log/'.$r->member_id);?>"><span class="glyphicon glyphicon-th-large"></span> Log</a></li>
						
			            <li><a href="<?php echo site_url('members/notice/'.$r->member_id);?>"><span class="glyphicon glyphicon-list-alt"></span> Notice</a></li>

			            <li><a href="<?php echo site_url('members/order_cab/'.$r->member_id);?>"><span class="glyphicon glyphicon-send"></span> Order Taxi</a></li>
			          
			            <li><a href="<?php echo site_url('members/rent_car/'.$r->member_id);?>"><span class="glyphicon glyphicon-cloud"></span> Rent A Car</a></li>
			           
			            <!-- Dropdown-->
			            <li class="panel panel-default" id="dropdown">
			                <a data-toggle="collapse" href="#dropdown-lvl1">
			                    <span class="glyphicon glyphicon-user"></span> Account <span class="caret"></span>
			                </a>

			                <!-- Dropdown level 1 -->
			                <div id="dropdown-lvl1" class="panel-collapse collapse">
			                    <div class="panel-body">
			                        <ul class="nav navbar-nav">
			                            <li><a href="<?php echo site_url('members/change_password');?>">Change Password</a></li>
			                            <li><a href="<?php echo site_url('members/leave_membership');?>">Leave Membership</a></li>
			                            <li><a href="#">View Website</a></li>
			                            <li><a href="#">Sign Out</a></li>
			                            
			                           
			                            </li>
			                        </ul>
			                    </div>
			                </div>
			            </li>


			        </ul>
			    </div><!-- /.navbar-collapse -->
			</nav>
			    
			    </div>


			</div>











		</div>	<!-- end of custom-sidebar -->







		<?php $this->load->view($member_content_view_name);?>


















		</div> <!-- end of right-container -->




	
				<footer>

				  <p>

				    &copy All Rights Reserved to CSE 311 Group 161M/L

				  </p>





				</footer>














	</div> <!-- end of custom-wrapper -->



















</body>
</html>