
<title>Add new driver</title>

<div id="right-container">


	<form method="post" action="<?php echo site_url('Admin/new_car');?>">




		<ul class="new-driver-list">

			<li>
			
				<label>Model: </label>
				<input type="text" name="model">
			
			</li>



			<li>

				<label>License Plate: </label>
				<input type="text" name="license">

			</li>


			<li>

				<label>Seating Capacity: </label>
				<input type="text" name="capacity">

			</li>



			<li>

				<label>Milage: </label>
				<input type="text" name="milage">

			</li>



			<li>

				<label>Cost Per KM: </label>
				<input type="text" name="cpkm">

			</li>



			<li>

				<label>Cost Per Day: </label>
				<input type="text" name="cpd">

			</li>



			<li>

				<label>Upload an Image: </label>
				<input type="file" name="file">

			</li>


			<input type="submit" value="Save">




		</ul>









	</form>



</div> <!-- end of right-container -->