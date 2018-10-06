    
    <title>Cabs</title>



		<div id="right-container">


			<h2>All Cabs</h2>


<div class="container">
  <div class="row">
        <div class="col-md-3">
            <form action="#" method="get">
                <div class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>
        </div>

          <a href="<?php echo site_url('Admin/add_new_cab');?>" style="color:black; font-size:17px; margin-top:5px; margin-left:250px; margin-bottom:50px; float:left;"><span>Click On The Link To Add A New Cab To The List</span></a>

    <div class="col-md-12">
       <table class="table table-list-search cabs-table">
                    <thead>
                        <tr>

                            <th class="col-md-2">img</th>
                            <th class="col-md-2">Model</th>
                            <th class="col-md-1">Cab ID</th>
                            <th class="col-md-2">Driven By</th>
                            <th class="col-md-2">License Plate</th>
                            <th class="col-md-1">Availability</th>
                            <th class="col-md-2">Options</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php 

                        foreach ($this->admin_m->get_all_cabs() as $row) 
                        {
                        ?>


                         <tr>

                            <form method="post" action="<?php echo site_url('Admin/update_cabs/'.$row->cab_id);?>">

                            <td><img src="<?php echo base_url();?>img/cabs/cab1.jpg" alt="CAB"><input type="file" value="Edit Image" class="browse"></td>
                            <td><input name="model" type="text" value="<?php echo $row->model;?>"><span><?php echo $row->model;?></span></td>
                            <td><input readonly><span style="display:block !important;"><?php echo $row->cab_id;?></span></td>
                            <td><input name="driven_by" type="int" value="<?php echo $row->driven_by;?>"><span><?php echo $row->driven_by;?></span></td>
                            <td><input name="license" type="text" value="<?php echo $row->license;?>"><span><?php echo $row->license;?></span></td>
                            <td><input name="status" type="text" value="<?php echo $row->status;?>"><span><?php echo $row->status;?></span></td>
                            
                            <td>
                            
                                 <input type="submit" value="Save" style="width:70px; height:30px; background:#FC432F; border-radius:3px; color:white;">
                                <a style="width:70px; height:30px; background:#FC432F; padding:6px 9px; border-radius:3px; color:white;" onclick="return confirm('Are you sure you want to delete this row?')" href="<?php echo site_url('Admin/delete_cab/'.$row->cab_id);?>">Delete</a>
                    
                            </td>

                            </form>


                        </tr>
                      

                        <?php } ?>


                       


                    </tbody>
                </table>   
    </div>
  </div>
</div>







		</div>  <!-- end of right-container -->




