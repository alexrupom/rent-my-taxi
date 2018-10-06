
<title>Add new driver</title>

<div id="right-container">


	<form method="post" action="<?php echo site_url('Admin/new_driver');?>">




		<ul class="new-driver-list">

			<li>
			
				<label>Name: </label>
				<input type="text" name="name">
			
			</li>


			<li>

				<label>Driver ID: </label>
				<input type="int" name="driver_id">

			</li>
		
			<li>

				<label>Phone: </label>
				<input type="text" name="phone">

			</li>


			<li>

				<label>Available: </label>
				<input type="text" name="available">

			</li>


			<li>

				<label>Address: </label>
				<textarea name="address"></textarea>

			</li>

			<li>

				<label>Areas: </label>
				<textarea name="areas"></textarea>

			</li>

			<input type="submit" value="Save">




		</ul>









	</form>



</div> <!-- end of right-container -->