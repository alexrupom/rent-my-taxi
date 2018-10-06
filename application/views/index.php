
   <title>Home</title>

		<div id="navigation">



		<header>
		    <div class="container clearfix">
		        <h1 id="logo">
		            GET MY CAB
		        </h1>
		        <nav>
                  <a class="selected" href="<?php echo site_url('site/index');?>">Home</a>
                  <a href="<?php echo site_url('site/sign_in');?>">Login</a>
                  <a href="<?php echo site_url('site/contact');?>">Contact</a>
                  <a href="<?php echo site_url('site/sign_in');?>">Become a Member</a>
		        </nav>
		    </div>
		</header><!-- /header -->


		</div> <!-- end of navigation -->































 <div id="slider-control"></div>  


    <div id="custom-slider"  class="cycle-slideshow"
                data-cycle-fx="fade" 
                  data-cycle-slides="> div"
                  data-cycle-timeout="2000"
                  data-cycle-next="#next1"
                  data-cycle-prev="#prev1"
                  data-cycle-speed="1000"
                  data-cycle-pager="#slider-control"
                  data-cycle-pager-template="<a href='#' style='margin-right:5px; color:#e3e3e3;'><i class='fa fa-circle clients-controller'></i></a>"
                  >


    <div class="slider-image-container">

        <img src="<?php echo base_url();?>img/slider/banner3.jpg" alt="Slider Image">

        <div class="slider-image-container-content">

            <h1>Simplicity</h1>

            <p>
              Little Description Goes Here

            </p>
        

        </div> <!--end of slider-image-container-content-->


      </div> <!--end of slider-image-container--> 



    <div class="slider-image-container">

        <img src="<?php echo base_url();?>img/slider/banner2.jpg" alt="Slider Image">

        <div class="slider-image-container-content">

            <h1>Perfection</h1>

            <p>
              Little Description Goes Here

            </p>
        

        </div> <!--end of slider-image-container-content-->


      </div> <!--end of slider-image-container--> 



      <div class="slider-image-container">

        <img src="<?php echo base_url();?>img/slider/banner1.jpg" alt="Slider Image">

        <div class="slider-image-container-content">

            <h1>Experience</h1>

            <p>

              An Exceptionally High Experience For Details

            </p>
        

        </div> <!--end of slider-image-container-content-->


      </div> <!--end of slider-image-container--> 


  
      
      
      

        
    </div> <!--end of custom-slider-->






































    <div id="about-us">


    	<div id="about-us-progress">


      <?php 

      foreach ($this->cms_m->get_about_us_table() as $row) 
      {
      ?>
      
    		<h2>Our Ratings</h2>

    		<div class="progress"><div class="progress-bar safety" style="width:90%;">Safety (90%)</div></div>
    		<div class="progress"><div class="progress-bar certainty" style="width:85%;">Certainty (85%)</div></div>
    		<div class="progress"><div class="progress-bar timing" style="width:75%;">Timing (75%)</div></div>


    	</div> <!-- end of about-us-progress -->



    <div id="about-us-content">

      <h2>About Us</h2>

      <p>

        <?php echo $row->top_paragraph;?>

      </p>

      <p>


        <?php echo $row->bottom_paragraph;?>

       </p>






    </div> <!-- end of about-us-content -->


    <?php } ?>


    </div>  <!-- end of about-us -->













































    <div id="choose-us" class="col-md-12">


        <h2>Why Choose Us</h2>

        <?php 

        foreach ($this->cms_m->get_cms_sct_content_table() as $row) 
        {
        ?>
        
        <section class="choose-col col1 col-md-4">

          <h3><?php echo $row->title1;?> <i class="fa fa-check-circle-o"></i></h3>

          <p>
              
              <?php echo $row->content1;?>

          </p>


        </section>



        <section class="choose-col col2 col-md-4">

          <h3><?php echo $row->title2;?> <i class="fa fa-check-circle-o"></i></h3>

          <p>
              
               <?php echo $row->content2;?>

          </p>


        </section>






        <section class="choose-col col3 col-md-4">

          <h3><?php echo $row->title3;?>  <i class="fa fa-check-circle-o"></i></h3>

          <p>
              
              <?php echo $row->content3;?>

          </p>


        </section>



        <?php } ?>





    </div> <!-- end of choose-us -->
















    <div id="cabs">


      <h2>Cabs We Provide</h2>


      <div id="informations">

        <?php 

        foreach ($this->cms_m->get_cabs_provide_content_table() as $row) 
        {
        ?>

        <p><?php echo $row->first_para;?></p>
        <p><?php echo $row->second_para;?></p>
        <p><?php echo $row->third_para;?></p>

        <?php } ?>


      </div> <!-- end of information -->




        
      <div id="all-cars">


        <ul>

            <li>

                  <div class="front"><img src="<?php echo base_url();?>img/cabs/cab1.jpg"></div>
                  <div class="back">

                    <h3>Car Name</h3>
                    <h4>License Plate</h4>
                    <h4>Driver Name</h4>


                  </div>
            
            </li>


            <li>

                  <div class="front"><img src="<?php echo base_url();?>img/cabs/cab2.png"></div>
                  <div class="back">

                    <h3>Car Name</h3>
                    <h4>License Plate</h4>
                    <h4>Driver Name</h4>


                  </div>
            
            </li>



            <li>

                  <div class="front"><img src="<?php echo base_url();?>img/cabs/cab3.png"></div>
                  <div class="back">

                    <h3>Car Name</h3>
                    <h4>License Plate</h4>
                    <h4>Driver Name</h4>


                  </div>
            
            </li>




            <li>

                  <div class="front"><img src="<?php echo base_url();?>img/cabs/cab4.jpg"></div>
                  <div class="back">

                    <h3>Car Name</h3>
                    <h4>License Plate</h4>
                    <h4>Driver Name</h4>


                  </div>
            
            </li>





            <li>

                  <div class="front"><img src="<?php echo base_url();?>img/cabs/cab5.jpg"></div>
                  <div class="back">

                    <h3>Car Name</h3>
                    <h4>License Plate</h4>
                    <h4>Driver Name</h4>


                  </div>
            
            </li>




            <li>

                  <div class="front"><img src="<?php echo base_url();?>img/cabs/cab6.jpg"></div>
                  <div class="back">

                    <h3>Car Name</h3>
                    <h4>License Plate</h4>
                    <h4>Driver Name</h4>


                  </div>
            
            </li>





            <li>

                  <div class="front"><img src="<?php echo base_url();?>img/cabs/cab7.jpg"></div>
                  <div class="back">

                    <h3>Car Name</h3>
                    <h4>License Plate</h4>
                    <h4>Driver Name</h4>


                  </div>
            
            </li>




            <li>

                  <div class="front"><img src="<?php echo base_url();?>img/cabs/cab8.jpg"></div>
                  <div class="back">

                    <h3>Car Name</h3>
                    <h4>License Plate</h4>
                    <h4>Driver Name</h4>


                  </div>
            
            </li>





            <li>

                  <div class="front"><img src="<?php echo base_url();?>img/cabs/cab9.jpg"></div>
                  <div class="back">

                    <h3>Car Name</h3>
                    <h4>License Plate</h4>
                    <h4>Driver Name</h4>


                  </div>
            
            </li>




            <li>

                  <div class="front"><img src="<?php echo base_url();?>img/cabs/cab10.png"></div>
                  <div class="back">

                    <h3>Car Name</h3>
                    <h4>License Plate</h4>
                    <h4>Driver Name</h4>


                  </div>
            
            </li>



            <li>

                  <div class="front"><img src="<?php echo base_url();?>img/cabs/cab11.jpg"></div>
                  <div class="back">

                    <h3>Car Name</h3>
                    <h4>License Plate</h4>
                    <h4>Driver Name</h4>


                  </div>
            
            </li>





            <li>

                  <div class="front"><img src="<?php echo base_url();?>img/cabs/cab12.jpg"></div>
                  <div class="back">

                    <h3>Car Name</h3>
                    <h4>License Plate</h4>
                    <h4>Driver Name</h4>


                  </div>
            
            </li>



            <li>

                  <div class="front"><img src="<?php echo base_url();?>img/cabs/cab13.jpg"></div>
                  <div class="back">

                    <h3>Car Name</h3>
                    <h4>License Plate</h4>
                    <h4>Driver Name</h4>


                  </div>
            
            </li>



        </ul>










       


      </div> <!-- end of all-cars -->



  </div> <!-- end of cabs -->















































    <div id="banner">

      <div id="banner-overlay">

        <h1>TAKE AN AWESOME TRIP TODAY WITH YOUR FAMILY !!</h1>
        <h1>YOUR SAFETY, OUR RESPONSIBILITY</h1>


      </div>

    </div>


























<div id="fare-content">



    <h2>Fare Cost</h2>

    <div id="fare-image">


      <img src="<?php echo base_url();?>img/finger.png" alt="image">




    </div> <!-- end of fare-image -->





    <div id="fare">


  
      <section class="features_table">
            <div class="container ">
              <div class="col-sm-8 col-md-6 col-xs-12 no-padding">

               
                  <div class="features-table">
                      <ul>
                          <h1>Features</h1>

                           <?php
                          foreach ($this->cms_m->get_fare_table() as $row) 
                          {
                          ?>
                          <li><?php echo $row->feature;?> </li>
                           
                           <?php } ?> 
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2 col-md-3 col-xs-12 no-padding">
                <div class="features-table-free">
                      <ul>
                          <h1>Peak</h1>
                            
                           <?php
                          foreach ($this->cms_m->get_fare_table() as $row) 
                          {
                          ?>
                          <li><?php echo $row->peak;?> </li>
                           
                           <?php } ?> 
                            
                            
                        </ul>
                    </div>
                
                </div>
                 <div class="col-sm-2 col-md-3 col-xs-12 no-padding">
                   <div class="features-table-paid">
                      <ul>
                          <h1>OFF PEAK</h1>
                            
                           <?php
                          foreach ($this->cms_m->get_fare_table() as $row) 
                          {
                          ?>
                          <li><?php echo $row->off_peak;?> </li>
                           
                           <?php } ?> 
                            
                        </ul>
                    </div>
                 </div>


                 
            </div>
        
        </section>




    </div> <!-- end of fare -->






</div> <!-- end of fare-content-->






































<div id="clients-content">

  <h2>Still Confused? Meet Our Happy Clients</h2>

  <div id="clients" class="cycle-slideshow vertical" 
                    data-cycle-fx=carousel
                    data-cycle-timeout=3000
                    data-cycle-slides="> div"
                    data-cycle-carousel-visible=2
                    data-cycle-carousel-vertical=true
                    >


        <?php 


        $count = 1;
        foreach ($feedbacks as $feedback) 
        {

        if($count%2==0)
        {
        ?>

        <div class="left" style="float: left;">

          <img src="<?php echo base_url()?>img/clients/client1.jpg" alt="clients" style="float: left; margin-bottom:30px;">

        <?php } else { ?>

        <div class="right" style="float: right;">

          <img src="<?php echo base_url()?>img/clients/client1.jpg" alt="clients" style="float: right; margin-bottom:30px;">
        
        <?php } ?>


          <p>
            
            <?php echo $feedback->comment; ?>

          </p>


        </div>

        <?php $count++ ; } ?> 





  </div> <!-- end of clients -->


</div> <!-- end of clients-content -->





<div id="faq">

  <h2>FAQ's</h2>

  <dl>

    <?php 
    foreach ($this->cms_m->get_faqs_table() as $row) 
    {
    ?>

    <dt><?php echo $row->question;?></dt>
    <dd><?php echo $row->answer;?></dd>

    <?php } ?>


  </dl>


  <script>

    (function(){

          var dd = $('dd');

          dd.hide();


          $('dt').on('click',function(){

            $(this).next().siblings('dd').slideUp(400);
            $(this).next().slideToggle(400);
          });

        })();





  </script>








</div> <!-- end of faq -->







