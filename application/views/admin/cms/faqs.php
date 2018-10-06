
<title>CMS-FAQ'S</title>

		<div id="right-container">


			<h2>Frequently Asked Questions</h2>


			<div class="faq">

				<?php 

				foreach ($this->cms_m->get_faqs_table() as $row) 
				{
				?>

				<form class="faq-textarea" method="post" action="<?php echo site_url('Admin/update_faqs_row/'.$row->key_id);?>">

					<textarea class="questions" name="question"><?php echo $row->question;?></textarea>
					<textarea name="answer"><?php echo $row->answer;?></textarea>

					<input type="submit" value="Update" style="margin-top:10px;">

				</form>
				

				<?php } ?>





				
			</div>












		</div>  <!-- end of right-container -->
