<title>CMS-About Us</title>

		<div id="right-container">


			<h2>About Us Contents</h2>


			<?php 

			foreach ($this->cms_m->get_about_us_table() as $row) 
			{
			?>
			
			<form class="about-us-form" method="post" action="<?php echo site_url('Admin/update_about/'.$row->key_id);?>">



				<div class="textarea-container top-para"><textarea class="about-us-textarea" name="top_para"><?php echo $row->top_paragraph;?></textarea></div>
				<div class="textarea-container bottom-para"><textarea class="about-us-textarea" name="bottom_para"><?php echo $row->bottom_paragraph;?></textarea></div>
				
				
				<ul>
									

					<li>

						<label>Safety</label>
						<input name="safety_per" value="<?php echo $row->safety.'%';?>">

					</li>


					<li>

						<label>Certainty</label>	
						<input name="certainty_per" value="<?php echo $row->certainty.'%';?>">
						
					</li>


					<li>

						<label>Timing</label>		
						<input name="timing_per"  value="<?php echo $row->timing.'%';?>">
						
					</li>


					

				</ul>

				<?php } ?>


				<input type="submit" class="custom-button about-us-button" value="Post">
					
				


			</form>











		</div>  <!-- end of right-container -->


