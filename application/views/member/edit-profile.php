		<title>Profile</title>

		<div id="right-container">


			<div id="pro-pic">

				<img src="<?php echo base_url();?>img/cabs/cab1.jpg" alt="Profile Picture">


			</div>





			<div id="personal-info">

		

			<h1>My Profile</h1>

				<h2>Personal Informations<em>___</em></h2>

				 <form method="post" action="<?php echo site_url('Members/update_profile');?>">

				<div class="member-info">
					

					<h3>First Name: </h3>
					<p><input style="width:300px; padding-left:10px;" type="text" name="f_name" value="<?php echo $r->f_name;?>"></p>
				
				</div>

			  
				<div class="member-info">
					

					<h3>Last Name: </h3>
					<p><input style="width:300px; padding-left:10px;" type="text" name="l_name" value="<?php echo $r->l_name;?>"></p>
				
				</div>




				<div class="member-info">

					<h3>Phone Number: </h3>
					<p><input style="width:300px; padding-left:10px;" type="text" name="phone" value="<?php echo $r->phone;?>"></p>

				</div>


				<div class="member-info">

					<h3>E-Mail: </h3>
					<p><input style="width:300px; padding-left:10px;" type="text" name="email" value="<?php echo $r->email;?>"></p>

				</div>

			
				<div class="member-info">

					<h3>Address</h3>
					<p><textarea style="height:200px; width:300px; padding:5px 10px;" name="address"><?php echo $r->address;?></textarea>

				</div>


				<input style="display:none;" type="int" name="id" value="<?php echo $r->member_id;?>">


				<div class="member-info">
					<input type="submit" value="Update" style="float:right; margin-right:15%;">
				</div>



				</form>





			</div> <!-- end of personal-info -->




