		

		<title>Notice</title>

		<div id="right-container" class="notice-board" >


			<h2>Notice Board</h2>

			
			<div class="container col-md-11">

				<?php 
				foreach ($this->member_m->get_all_notice() as $notice) 
				{
				?>

			    <div class="notice notice-warning">

			        <strong><?php echo $notice->title;?></strong> <span class="pull-right text-warning readMore">Read</span>
			        
			        <div class="desc">
			    
			           <p>
			               <?php echo $notice->notice;?>
			               <br><br>Posted On : <?php echo $notice->date;?>

			            </p>        
			        
			        </div>
			    
			    </div>
			    
			    <?php } ?>


			</div>




