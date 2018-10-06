	

	<title>CMS-Cost</title>


		<div id="right-container">


			<h2>Fare Costs</h2>


			<form>


				<table class="cost-table">


					<th>Features</th>
					<th>Peak</th>
					<th>Off Peak</th>
					<th>Option</th>

					<?php

					foreach ($this->cms_m->get_fare_table() as $row) 
					{
					?>
					
					<tr>

						<td><?php echo $row->feature;?></td>
						<td><?php echo $row->peak;?></td>
						<td><?php echo $row->off_peak;?></td>
						<td>

							<a href="<?php echo site_url('Admin/edit_cost/'.$row->key_id);?>">Edit</a>
							<a onclick="return confirm('Are you sure you want to delete this row?')" href="<?php echo site_url('Admin/delete_cost_row/'.$row->key_id);?>">Delete</a>
					
						</td>

					</tr>

					<?php } ?>


				</table>

			</form>



		
			<h2>Add A New Row : </h2>

		
			<form method="post" action="<?php echo site_url('Admin/cost_new_row');?>">

					
				<ul id="add-new-cost-row">

					<li><h3>Feature</h3><input type="text" 	name="new-feature"	placeholder="Feature Name"></li>
					<li><h3>Peak</h3><input type="text" 	name="new-peak"		placeholder="Peak Hour Cost"></li>
					<li><h3>Off Peak</h3><input type="text" name="new-off-peak"	placeholder="Offset Hour Cost"></li>

					<input type="submit" class="add-row-button" value="Save">


				</ul>


			</form>

















		</div>  <!-- end of right-container -->


