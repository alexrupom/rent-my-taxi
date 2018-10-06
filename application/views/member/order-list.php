


	<title>My Log</title>


		<div id="right-container">

			<div class="col-md-12 col-sm-6">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="http://lorempixel.com/100/100/people/9/">
        </div>
        <div class="card-info"> <span class="card-title">Member Name</span>

        </div>
    </div>

    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab">
                <div class="hidden-xs">Taxi Cabs</div>
            </button>
        </div>
        



        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab">
                <div class="hidden-xs">Rent A Car</div>
            </button>
        </div>
    </div>

        <div class="well">
      <div class="tab-content">

        <div class="tab-pane fade in active" id="tab1">


			<h3>Order Log</h3>
			
				<div class="cab-tab-content">

					

			       	<?php 

			       	foreach ($order_log as $log)
			       	{
			       	?>

					<div class="full-list">	

			       		

				       		<div class="order-list-content">

					       		<div class="order-list">
					       		
						       		<h4>Name:</h4>
						       		<p><?php echo $log->name;?></p>
						       		
					       		</div>


					       		<div class="order-list">       	

						       		<h4>From:</h4>
						       		<p><?php echo $log->starting_point;?></p>

								</div>


					       		<div class="order-list">       	

						       		<h4>To:</h4>
						       		<p><?php echo $log->destination;?></p>

								</div>

					       		
					       		
					       		<div class="order-list">
						       		
						       		<h4>E-Mail:</h4>
						       		<p><?php echo $log->email;?></p>
								
								</div>

					       		

					       		<div class="order-list">

						       		<h4>Phone Number:</h4>
						       		<p><?php echo $log->phone;?></p>


					          </div>


					        <p>

					        	<button>Remove From Log</button>

					        </p>



			        </div> <!-- end of order-list-content -->


			    </div> <!-- end of full-list -->

			
			    <?php } ?>


			</div> <!-- end of cab-tab-content -->
			     

















        </div> <!-- end of tab1 -->










        <div class="tab-pane fade in" id="tab3">




			<h3>Order Log</h3>
			
				<div class="cab-tab-content">

					  	<?php 

			       		foreach ($cars_log as $car_log)
			       		{
			       		?>
			       		
			       		<div class="car-log-wrapper" style="width:100%; height:auto; float:left; margin-bottom:30px;">

				       		<img src="<?php echo base_url();?>img/cabs/cab1.jpg" alt="thumbnail">


				       		<div class="car-order-list-content">
					
				     
					       		
					       		<div class="car-order-list">
					       		
						       		<h4>Name:</h4>
						       		<p><?php echo $car_log->name;?></p>
						       		
					       		</div>


					       		<div class="car-order-list">       	

						       		<h4>From:</h4>
						       		<p><?php echo $car_log->starting_point;?></p>

								</div>



					       		<div class="car-order-list">       	

						       		<h4>Date:</h4>
						       		<p><?php echo $car_log->start_date;?></p>

								</div>



					       		<div class="car-order-list">       	

						       		<h4>Car ID:</h4>
						       		<p><?php echo $car_log->car_id;?></p>

								</div>




					       		<div class="car-order-list">       	

						       		<h4>Duration:</h4>
						       		<p><?php echo $car_log->duration;?></p>

								</div>




					       		
					       		
					       		<div class="car-order-list">
						       		
						       		<h4>E-Mail:</h4>
						       		<p><?php echo $car_log->email;?></p>
								
								</div>

					       		

					       		<div class="car-order-list">

						       		<h4>Phone Number:</h4>
						       		<p><?php echo $car_log->phone;?></p>


					          </div>

					          <p>To Cancel Order: Call 86631433</p>
					         
					        </p>




				        </div> <!-- end of car-order-list-content -->


				       </div><!--  end of car-log-wrapper -->


			        <?php } ?>


			    </div> <!-- end of cab-tab-content -->
			     













        </div>
      </div>
    </div>
    
    </div>
            
    
