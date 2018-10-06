  <title>Car Log</title>

		<div id="right-container">


			<h2>Ordered Cars List</h2>


			<ol class="ordered-taxi">


        <?php 

        foreach ($cars_log as $row) 
        {
        ?>

			<li>

			
			<div class="taxi-info-container">

            <div class="ordered-car-id">

              <img src="<?php echo base_url();?>img/cabs/cab1.jpg" alt="Cars">

              <p>

                Car ID <br><?php echo $row->car_id;?> <br><br>
                Car Name <br><?php echo $row->model;?> <br><br>
                License Plate <br><?php echo $row->license;?>

              </p>


            </div>
					
						
            <section class="taxi-location-info">

							<label>Pick Up From -</label>
            				<span><?php echo $row->starting_point;?></span>

            				<label>Date -</label>
            				<span><?php echo $row->start_date;?></span>

							<label>Duration -</label>
							<span><?php echo $row->duration;?></span>


							<label style="float:left;">Status -</label>
							<?php 

							if($row->status == 'yes' || $row->status == 'Yes')
							{
							?>

							<span style="float:left; margin-left:10px; color:red; font-size:17px; font-weight:bolder;">Pending</span>
							<button onClick="location.href='<?php echo site_url('Admin/approve_car/'.$row->car_id);?>'">Approve Car</button>	
							<button onClick="location.href='<?php echo site_url('Admin/drivers');?>'">Assign A Driver</button>

							
							<?php }

							elseif($row->status == 'no' || $row->status == 'No')
							{
							?>

							<span style="float:left; margin-left:10px; color:green; font-size:17px; font-weight:bolder;">Approved</span>
							<button onClick="location.href='<?php echo site_url('Admin/drivers');?>'">Assign A Driver</button>

							<?php } ?>


						</section>


						<section class="taxi-passenger-info">

							<label>Ordered By -</label>
							<span><?php echo $row->f_name.' '.$row->l_name;?></span>


							<label>E-mail -</label>
							<span><?php echo $row->email;?></span>


							<label>Phone Number -</label>
							<span><?php echo $row->phone;?></span>


						</section>


					</div> <!-- end of taxi-info-container -->




				</li>



        <?php } ?>























        
				









			</ol>















		</div>  <!-- end of right-container -->


