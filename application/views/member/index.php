		<title>Profile</title>

		<div id="right-container">


			<div id="pro-pic">

				<img src="<?php echo base_url();?>img/cabs/cab1.jpg" alt="Profile Picture">


			</div>





			<div id="personal-info">

		

			<h1>My Profile</h1>

				<h2>Personal Informations<em>___</em></h2>


				  
				<div class="member-info">
					

					<h3>Name: </h3>
					<p><?php echo $r->f_name.' '.$r->l_name ;?></p>
				
				</div>


				<div class="member-info">
	
					<h3>Member ID: </h3>
					<p><?php echo $r->member_id;?></p>

				</div>


				<div class="member-info">

					<h3>Phone Number: </h3>
					<p><?php echo $r->phone;?></p>

				</div>


				<div class="member-info">

					<h3>E-Mail: </h3>
					<p><?php echo $r->email;?></p>

				</div>

			
				<div class="member-info">

					<h3>Address</h3>
					<p><?php echo $r->address;?></p>

				</div>

				
				<div class="member-info">

					<h3>Taxi Hired: </h3>
					<p><?php echo $r->taxi_hired;?></p>

				</div>


				<div class="member-info">

					<h3>Car Rent: </h3>
					<p><?php echo $r->car_rented;?></p>

				</div>



				<div class="member-info">

					<h3>Our Member Since: </h3>
					<p><?php echo $r->join_date;?></p>

				</div>


				<a href="<?php echo site_url('members/edit_profile_info/'.$r->member_id);?>">Edit My Profile</a>





			</div> <!-- end of personal-info -->




