<title>CMS-Cabs We Provide</title>


		<div id="right-container">


			<h2>Cabs We Provide Contents</h2>

			<?php foreach ($this->cms_m->get_cabs_provide_content_table() as $row) 
			{
			?>

			<form class="safety-certainty-timing" method="post" action="<?php echo site_url('Admin/update_cabs_content/'.$row->key_id);?>">

				
				<div class="safety-certainty-timing-textarea"><textarea name="paragraph1"><?php echo $row->first_para;?></textarea></div>
				<div class="safety-certainty-timing-textarea"><textarea name="paragraph2"><?php echo $row->second_para;?></textarea></div>
				<div class="safety-certainty-timing-textarea"><textarea name="paragraph3"><?php echo $row->third_para;?></textarea></div>

				<input type="submit" class="custom-button safety-certainty-timing-button" value="post">

				<?php } ?>

			</form>








		</div>  <!-- end of right-container -->

