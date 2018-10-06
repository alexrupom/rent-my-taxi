    <title>Drivers</title>

		<div id="right-container">


			<h2>All Drivers List</h2>


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


        <a href="<?php echo site_url('Admin/add_new_driver');?>" style="color:black; font-size:17px; margin-top:5px; margin-left:250px; margin-bottom:50px; float:left;"><span>Click On The Link To Add A New Driver To The List</span></a>

    <div class="col-md-12">
       <table class="table table-list-search">
                    <thead>
                        <tr>

                            <th class="col-md-1">ID</th>
                            <th class="col-md-2">Name</th>
                            <th class="col-md-2">Address</th>
                            <th class="col-md-1">Phone</th>
                            <th class="col-md-1">Availabile</th>
                            <th class="col-md-2">Areas</th>
                            <th class="col-md-1">Trip</th>
                            <th class="col-md-2">Remove</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php 

                        foreach ($this->admin_m->get_all_drivers() as $row) 
                        {
                        ?>

                        <tr>

                            <form method="post" action="<?php echo site_url('Admin/update_drivers/'.$row->key_id);?>">

                            <td><input type="text" name="driver_id" value="<?php echo $row->driver_id;?>"><span><?php echo $row->driver_id;?></span></td>
                            <td><input type="text" name="name" value="<?php echo $row->name;?>"><span><?php echo $row->name;?></span></td>
                            <td><input type="text" name="address" value="<?php echo $row->address;?>"><span><?php echo $row->address;?></span></td>
                            <td><input type="text" name="phone" value="<?php echo $row->phone;?>"><span><?php echo $row->phone;?></span></td>
                            <td><input type="text" name="status" value="<?php echo $row->status;?>"><span><?php echo $row->status;?></span></td> 
                            <td><input type="text" name="areas" value="<?php echo $row->areas;?>"><span><?php echo $row->areas;?></span></td> 
                            <td><input type="int"  name="trip_no" value="<?php echo $row->trip_no;?>"><span><?php echo $row->trip_no;?></span></td>
                           
                            
                            <td>
                            
                                <button><input type="submit" value="Save" style="background:transparent;"></button>
                                <a style="width:70px; height:30px; background:#FC432F; padding:4px 8px; border-radius:3px; color:white;" onclick="return confirm('Are you sure you want to delete this row?')" href="<?php echo site_url('Admin/delete_driver/'.$row->key_id);?>">Delete</a>
                    
                            </td>

                            </form>

                        </tr>




                        <?php } ?>


                       


                       


                    </tbody>
                </table>   
    </div>
  </div>
</div>



</div> <!-- end of right-container -->