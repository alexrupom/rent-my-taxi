		

		<title>Edit Notice</title>

		<div id="right-container" class="notice-board">


			<h2>Notice Board</h2>

			
			<div class="container col-md-11">


			    <div class="notice notice-warning">

			        	<form method="post" action="<?php echo site_url('Admin/update_notice/'.$r->key_id);?>">

			           	<input  name="title" style="padding:5px 10px; width:100%; height:50px;" type="text" value="<?php echo $r->title;?>">
			           	<br><br>
			           	<textarea name="notice" style="padding:5px 10px; width:100%; height:250px;"><?php echo $r->notice;?></textarea>
						
						<br><br>						
						<input type="submit" value="Update">


						 </form>

			        
			    </div>
			    

			</div>

		</div>



