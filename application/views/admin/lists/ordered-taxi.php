

<title>Taxi Log</title>


		<div id="right-container">


			<h2>Ordered Taxi List</h2>


			<ol class="ordered-taxi">

			<?php 

			foreach ($this->admin_m->get_all_ordered_cab() as $row) 
			{
			?>


				<li>

					<div class="taxi-info-container">

					
						<section class="taxi-location-info">

							<label>Pick Up From -</label>
							<span><?php echo $row->starting_point;?></span>

							<label>Destination -</label>
							<span><?php echo $row->destination;?></span>



				            
				            <label style="float:left;">Status -</label>

							<?php 

							if($row->status == 'Pending')
							{
							?>

							<span style="float:left; margin-left:10px; color:red; font-size:17px; font-weight:bolder;"><?php echo $row->status;?></span>
							<button class="hide_button" onClick="location.href='<?php echo site_url('Admin/approve_cab/'.$row->key_id);?>'">Approve Order</button>
							

							<?php }
							elseif($row->status == 'Approved')
							{
							?>

							<span style="float:left; margin-left:10px; color:green; font-size:17px; font-weight:bolder;"><?php echo $row->status;?></span>
							<?php } ?>

								

						</section>


						<section class="taxi-passenger-info">

							<label>Ordered By -</label>
							<span><?php echo $row->f_name.' '.$row->l_name;?></span>


							<label>E-mail -</label>
							<span><?php echo $row->email;?></span>


							<label>Phone Number -</label>
							<span><?php echo $row->phone;?></span>

              
				            <button onClick="location.href='<?php echo site_url('Admin/drivers');?>'">Find Available Driver</button>



						</section>


					</div> <!-- end of taxi-info-container -->




				</li>
				


				<?php } ?>






			</ol>















		</div>  <!-- end of right-container -->


