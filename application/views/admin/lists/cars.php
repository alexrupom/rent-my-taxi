  
  <title>Cars</title>



    <div id="right-container">


      <h2>All Cars</h2>


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


          <a href="<?php echo site_url('Admin/add_new_car');?>" style="color:black; font-size:17px; margin-top:5px; margin-left:230px; margin-bottom:50px; float:left;"><span>Click On The Link To Add A New Cab To The List</span></a>

    <div class="col-md-10">
       <table class="table table-list-search cars-table">
                    
                    <thead>
                        <tr>

                            <th class="col-md-5">Img</th>
                            <th class="col-md-7">Detail</th>

                    </thead>
                    <tbody>

                        <?php 

                        foreach ($this->admin_m->get_all_cars() as $row) 
                        {
                        ?>
                        
                        <tr>

                            <form method="post" action="<?php echo site_url('Admin/update_cars/'.$row->car_id);?>">

                              <td><img src="<?php echo base_url();?>img/cabs/cab1.jpg" alt="CAB"><input type="file" value="Edit Image" class="browse"></td>
                             
                              <td>


                                <label>Model Name : </label>
                                <input name="model" type="text" value="<?php echo $row->model;?>">
                                <span><?php echo $row->model;?></span>
                                
                                <br>

                                
                                <label>Car ID : </label>
                                <input readonly type="text" value="<?php echo $row->car_id;?>">
                                <span><?php echo $row->car_id;?></span>
                                
                                <br>


                                <label>License Plate : </label>
                                <input name="license" type="text" value="<?php echo $row->license;?>">
                                <span><?php echo $row->license;?></span>
                                <br>


                                <label>Seating Capacity : </label>
                                <input name="capacity" type="text" value="<?php echo $row->capacity;?>">
                                <span><?php echo $row->capacity;?></span>
                                <br>


                                <label>Milage : </label>
                                <input name="milage" type="text" value="<?php echo $row->milage;?>">
                                <span><?php echo $row->milage;?></span>
                                <br>
                                

                                <label>Cost Per Km : </label>
                                <input name="cpkm" type="text" value="<?php echo $row->cpkm;?>">
                                <span><?php echo $row->cpkm;?></span>
                                <br>



                                <label>Cost Per Day : </label>
                                <input name="cpd" type="text" value="<?php echo $row->cpd;?>">
                                <span><?php echo $row->cpd;?></span>
                                <br>


                                <label>Availability : </label>
                                <input name="status" type="text" value="<?php echo $row->status;?>">
                                <span><?php echo $row->status;?></span>
                                <br><br>

                                <div class="right" style="width:50%;height:50px;float:right; margin-top:20px;">

                                <input type="submit" value="Save" style="border:1px solid #FC432F;float:left;width:80px; height:30px; padding:0px; background:#FC432F; border-radius:3px; color:white;">
                                 <label><a style="float:left; width:80px; height:30px; padding:3px 9px; background:#FC432F; border-radius:3px; color:white; font-weight:normal;"
                                           onClick="return confirm('Delete This Car?')" href="<?php echo site_url('Admin/delete_car/'.$row->car_id);?>">Delete</a></label>
                               
                                </div>

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



