
<title>CMS-Slider</title>

		<div id="right-container">


			<h2>Slider Images</h2>


			<?php 

			foreach ($this->cms_m->get_slider_table() as $row)
			{
			?>

			<form class="slider-image" method="post" action="<?php echo site_url('Admin/update_slider/'.$row->key_id);?>"> 

				<img src="<?php echo base_url();?>img/cabs/cab1.jpg" alt="image">

				<div>

					<ul class="slider-form">

						<li><textarea name="title" class="has-texts"><?php echo $row->title;?></textarea></li>
						<li><textarea name="small" class="has-texts"><?php echo $row->small;?></textarea></li>

						<li><input type="submit"  class="custom-button" value="Update"></li>


					</ul>



				</div>


				<input type="file" name="file" class="file-upload">
				<input type="submit" value="Upload">
				<button>Delete</button>
				


			</form>


			<?php } ?>











		</div>  <!-- end of right-container -->

