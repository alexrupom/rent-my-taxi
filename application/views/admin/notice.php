		

		<title>Notice</title>

		<div id="right-container" class="notice-board">


			<h2>Notice Board</h2>

			
			<div class="container col-md-11">

				<?php 
				foreach ($this->admin_m->get_all_notice() as $notice) 
				{
				?>

			    <div class="notice notice-warning">

			        <strong><?php echo $notice->title;?></strong> <span class="pull-right text-warning readMore">Read</span>
			        
			        <div class="desc">
			    
			           <p>
			               <?php echo $notice->notice;?>
			               <br><br>Posted On : <?php echo $notice->date;?>
			               <br><br>

			               <a style="float:left; width:60px; height:28px; background:#23282E; color:white; padding:3px 15px; border-radius:3px; margin-left:5px;"

			               href="<?php echo site_url('Admin/edit_notice/'.$notice->key_id);?>">Edit</a>

			               <a style="float:left; width:60px; height:28px; background:#23282E; color:white; padding:2px 7px; border-radius:3px; margin-left:5px;"

			               onClick="return confirm('Delete This Notice?');" href="<?php echo site_url('Admin/delete_notice/'.$notice->key_id);?>">Delete</a>

			            </p>        
			        
			        </div>
			    
			    </div>
			    
			    <?php } ?>


			</div>

		</div>



