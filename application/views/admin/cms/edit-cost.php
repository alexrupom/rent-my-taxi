	

	<title>CMS-Cost</title>


		<div id="right-container">


			<h2>Fare Costs</h2>


			<form method="post" action="<?php echo site_url('Admin/update_cost/'.$r->key_id);?>">


				<table class="cost-table">


					<th>Features</th>
					<th>Peak</th>
					<th>Off Peak</th>
					<th>Post</th>


					<tr>

						<td><input type="text" 	name="feature"		value="<?php echo $r->feature;?>"></td>
						<td><input type="text" 	name="peak" 		value="<?php echo $r->peak;?>"></td>
						<td><input type="text" 	name="off-peak" 	value="<?php echo $r->off_peak;?>"></td>
						
						<td><input type="submit" class="post-edit" value="submit"></td>
					</tr>




				</table>

			</form>



	











		</div>  <!-- end of right-container -->


