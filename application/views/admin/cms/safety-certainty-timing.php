

<title>CMS- Safety-Certainty-Timing</title>

		<div id="right-container">

			<?php foreach ($this->cms_m->get_cms_sct_content_table() as $row) 
			{
			?>
			
			<h2><?php echo $row->title1.','.$row->title2.','.$row->title3;?></h2>


			<form class="safety-certainty-timing" method="post" action="<?php echo site_url('Admin/update_safety_certainty_timing/'.$row->key_id);?>">

				<div class="safety-certainty-timing-textarea"><input type="text" name="title1" value="<?php echo $row->title1;?>"><textarea name="content1"><?php echo $row->content1;?></textarea></div>
				<div class="safety-certainty-timing-textarea"><input type="text" name="title2" value="<?php echo $row->title2;?>"><textarea name="content2"><?php echo $row->content2;?></textarea></div>
				<div class="safety-certainty-timing-textarea"><input type="text" name="title3" value="<?php echo $row->title3;?>"><textarea name="content3"><?php echo $row->content3;?></textarea></div>


				<input type="submit" class="custom-button safety-certainty-timing-button" value="post">

			</form>

			<?php } ?>
			






		</div>  <!-- end of right-container -->


