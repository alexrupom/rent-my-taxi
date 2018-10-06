
		<title>Sign In</title>
	

		<div id="navigation" style="background:rgba(0,0,0,.9) !important; width:100%; height:90px;">



			<header>
			    <div class="container clearfix">
			        <h1 id="logo">
			            GET MY CAB
			        </h1>
			        <nav>
		                  <a href="<?php echo site_url('site/index');?>">Home</a>
		                  <a href="<?php echo site_url('site/sign_in');?>">Login</a>
		                  <a href="<?php echo site_url('site/contact');?>">Contact</a>
		                  <a href="<?php echo site_url('site/sign_in');?>">Become a Member</a>
			        </nav>
			    </div>
			</header><!-- /header -->


		</div> <!-- end of navigation -->





		<div id="sign-up-in">


			<div class="container">

			    <div class="row-fluid">
			        <div class="col-md-12">
			            <div class="col-md-offset-1 col-md-5">
			                <div class="area">
			                    <form class="form-horizontal" method="post" action="<?php echo site_url('Site/go_to_member_profile');?>">
			                        <div class="heading">
			                            <h4 class="form-heading" style="margin-left:-50px;">Already A Member? Sign in</h4><br>
			                        </div>

			                        

			                        <div class="control-group">
			                            <label class="control-label" for=
			                            "inputUsername">E-Mail</label>

			                            <div class="controls">
			                                <input id="inputUsername" placeholder=
			                                "Enter User ID" type="text" name="member_id">
			                            </div>
			                        </div>

			                        <br>
			                        <div class="control-group">
			                            <div class="controls">

			                                <input type="submit" name="submit" value="Sign In" style="width:90px; height:35px; padding:5px 10px; color:white;background:#5CBB5C; border:1px solid #5CBB5C;">

			                            </div>
			                        </div>


			                        <!--
			                        <div class="alert alert-error">

			                            <button class="close" data-dismiss="alert" type=
			                            "button">×</button> <strong style="margin-left:-15px;">Access Denied!</strong>
			                            Please provide valid authorization.
			                        </div>
			                    	-->

			                    </form>
			                </div>
			            </div>

			            <div class="col-md-offset-1 col-md-5">
			                <div class="area">
			                    <form class="form-horizontal" method="post" action="<?php echo site_url('Site/new_member');?>">
			                        <div class="heading">
			                            <h4 class="form-heading" style="margin-left:-50px;">Become A New Member</h4><br>
			                        </div>

			              

			                        <div class="control-group">
			                            <label class="control-label" for="inputFirst">First
			                            Name</label>

			                            <div class="controls">
			                                <input id="inputFirst" placeholder=
			                                "First Name" type="text" name="f_name">
			                            </div>
			                        </div>

			                        <div class="control-group">
			                            <label class="control-label" for="inputLast">Last
			                            Name</label>

			                            <div class="controls">
			                                <input id="inputLast" placeholder="Last Name"
			                                type="text" name="l_name">
			                            </div>
			                        </div>


			                        <div class="control-group">
			                            <label class="control-label" for=
			                            "inputUser">Address</label>

			                            <div class="controls">
			                                <input id="inputUser" placeholder=
			                                "Current Address" type="text" name="address">
			                            </div>
			                        </div>


			                        <div class="control-group">
			                            <label class="control-label" for=
			                            "inputEmail">Email</label>

			                            <div class="controls">
			                                <input id="inputEmail" placeholder=
			                                "Valid Email" type="text" name="email">
			                            </div>
			                        </div>




			                        <div class="control-group">
			                            <label class="control-label" for=
			                            "inputEmail">Phone</label>

			                            <div class="controls">
			                                <input id="inputEmail" placeholder=
			                                "Cell Phone Number" type="text" name="phone">
			                            </div>
			                        </div>



			                        <div class="control-group">
			                            <label class="control-label" for=
			                            "inputPassword">Password</label>

			                            <div class="controls">
			                                <input id="inputPassword" placeholder=
			                                "*****" type="password" name="password">
			                            </div>
			                        </div>

			                        <div class="control-group">
			                            <div class="controls">
			                                <br><br>
			                                <input type="submit" name="submit" value="Sign Up" style="width:90px; height:35px; padding:5px 10px; color:white;background:#5CBB5C; border:1px solid #5CBB5C;">
			                            </div>
			                        </div>

			                        <br>

				                        <!--
				                        <div class="alert alert-info">
				                            
				                        	
				                            <button class="close" data-dismiss="alert" type=
				                            "button">×</button> <strong>Confirmation:</strong>

				                            A confirmation email has been sent to your
				                            email.<br>
				                            Thank you for your registration.

			                        	-->

			                        </div>
			                    </form>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>






		</div> <!-- end of sign-up-in -->







