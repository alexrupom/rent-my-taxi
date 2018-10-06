  
  <title>Feedbacks</title>


    <div id="right-container">


      <h2>Feedbacks From Members</h2>


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
    <div class="col-md-10">
       <table class="table table-list-search feedback-table">
                    
                    <thead>
                        <tr>

                            <th class="col-md-2">Member ID</th>
                            <th class="col-md-2">Member Name</th>
                            <th class="col-md-6">Comment</th>
                            <th class="col-md-2">Visibility</th>

                    </thead>

                    <tbody>


                      <?php 

                      foreach ($feedback_array as $feedback) 
                      {
                      ?>
                        <tr>

                          <td><?php echo $feedback->member_id;?></td>
                          <td><?php echo $feedback->f_name.' '.$feedback->l_name;?></td>
                          
                          <td class="comments">
                              
                              <?php echo $feedback->comment;?>

                          </td>


                          <?php if($feedback->visibility == 'No') {;?>
                          <td><button onClick="location.href='<?php echo site_url('Admin/change_view_to_yes/'.$feedback->key_id)?>';">Show</button></td>  

                          <?php } elseif($feedback->visibility == 'Yes'){ ;?>
                          <td><button onClick="location.href='<?php echo site_url('Admin/change_view_to_no/'.$feedback->key_id)?>';">Hide</button></td>  <?php } ?>

                        </tr>
                        
                        <?php } ?>
                       

                       


                       


                    </tbody>
                </table>   
    </div>
  </div>
</div>







    </div>  <!-- end of right-container -->



