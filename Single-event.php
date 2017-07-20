<?php include("includes/arrays.php"); 

error_reporting(E_ERROR | E_WARNING | E_PARSE);

function strip_bad_chars( $input ){
  $output = preg_replace("/[^a-zA-Z0-9_-]/", "" , $input );
  return $output;
}

if (isset($_GET['item'])) {
  $events = strip_bad_chars( $_GET['item'] );
  $singleEvent = $singleEvents[$events];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Quest</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="css/jquery.countdown.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.transitions.css">


<!--custom css-->
<link rel="stylesheet" href="css/single-event.css" type="text/css">
<!-- Important Owl stylesheet -->


<!--font-awesome-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


</head>

<body>
   <div id="preloader">
    <div id="status">&nbsp;</div>
   </div>

     <!--THIS IS DYNAMIC HEADER-->
     <?php include('includes/header.php'); ?><!--DYNAMIC HEADER ENDS-->


    <section id="header" class="overlay">
      <div class="section-overlay">
      <div class="container">
         

      <!--<header class="parallax-window" data-parallax="scroll" data-image-src="../img/header-bg.jpg">-->
         <div class="parallax-slider">
          <div class="navbar navbar-inverse  opaque-navbar">
         
         <!--THIS IS DYNAMIC NAVBER-->
        <?php include('includes/nav.php'); ?><!--DYNAMIC NAVBER ENDS-->
    </div>

       
          <div class="col-md-12 text-center">
         
           <div class="header-text">
                <h1 style="font-weight: 600;"><?php echo $singleEvent[mainTitle]; ?></h1>
                <p style="margin:20px 0px 30px">
                  EVENTS / SINGLE EVENTS
                </p>
          
           <a class="btn-default white">Learn More</a>
           </div> <!--header-text-->
        </div> <!--parallax-slider-->

        </div> <!--row-->
     </div>

    <!--</header>-->
 </div>
 </section>
     
  



  
 
 

<!--SINGLE-EVENT-->
<section id="single-event" style="padding:95px 0px 130px">
    <div class="container">
       <div class="row ">
           <div class="col-md-6 wow slideInLeft animated">
               <div class="single-event-info">
                  <h3 class="single-event-sub-header" style="font-size: 30px;
    font-weight: 400;"><?php echo $singleEvent[title]; ?></h3>
                  <div class="horizontal-line" style="    width: 0px;height: 3px; margin: -11px 0px 20px;">
									<hr>
                  </div>
                  <p style="font-size: 18px; max-width:535px;margin: 20px 0px 0px 0px;font-weight:300">
                         <?php echo $singleEvent[eventText]; ?>
                  </p>                 
                  <p style="font-size: 18px; max-width: 535px; margin: 20px 0px 40px 0px;font-weight:300">
                       
                  </p>
               </div>
                   
                   <div class="donation-progress-box">
                                
                       <div class="event-sub-header"><h4>DONATION</h4></div>
                        <span class="menu-price"><?php echo $singleEvent[donationPer]; ?></span>
                          <div class="donation-progress-bar">
                             
                              <div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: <?php echo $singleEvent[donationPer]; ?>;"></div>
                          </div>
                         <span class="raised" style="float:left">Rasied:<?php echo $singleEvent[donationRaise]; ?></span>
                         <span class="goal" style="float:right">Goal:<?php echo $singleEvent[donationGoal]; ?></span>
                   </div>
           
             </div>
      
            <div class="col-md-6"> 
                
               <div class="single-event-form">
                   <form class="form-horizontal wow zoomIn animated" method="post">
                    <fieldset>
                      <div class="col-md-12">
                           <h3 class="single-event-sub-header text-center" style="font-size: 30px;font-weight: 400;margin-top:3px">DONATE US</h3>
                             <div class="horizontal-line" style="height: 3px; margin: -10px auto 20px;;">
									<hr style="width:85px">
                            </div>
                         <div class="col-md-6">
                           
                         <div class="form-group">
                              
                              
                                  <input id="name" name="name" type="text" name="first_name" required placeholder="FIRST NAME" class="form-control">
                              
                          </div>
                          <div class="form-group">
                              
                              
                                  <input id="name" name="name" type="text" name="first_name" required placeholder="EMAIL" class="form-control">
                              
                          </div> 
                           <div class="form-group">
                              
                              
                                  <input id="lname" name="name" type="text" name="first_name" required placeholder="AMOUNT" class="form-control">
                              
                          </div> 
                        <!--  <span id="default_message_overlay" style=" position: absolute;margin:20px 0px 0px 14px; display: block;width: 120px;font-size:14px">CAPMAIGN</span>-->
                         <select id="area_filter">
                             
                              <option value=".bikes">CAMPAIGN</option>
                              <option value=".cars">HELPING</option>
                              <option value=".bikes">CHARITY </option>
                              <option value=".hedgehogs">FUNDRISING</option>
                              <option value=".cakes">CEREMONY</option>
                          </select>
                         </div>
                       
                          <div class="col-md-6">
                               <div class="form-group">
                              
                             
                                  <input id="fname" name="name" type="text" name="first_name" required placeholder="LAST-NAME" class="form-control">
                              
                          </div>
                             
                               <div class="form-group">
                              
                             
                                  <input id="fname" name="name" type="text" name="first_name" required placeholder="PHONE" class="form-control">
                              
                          </div>

                            
                                   <select id="area_filter">
                                      <option value=".bikes">DONATION</option>
                                      <option value=".cars">HELPING</option>
                                      <option value=".bikes">CHARITY </option>
                                      <option value=".hedgehogs">FUNDRISING</option>
                                      <option value=".cakes">CEREMONY</option>
                                  </select>
                            

                          </div>
                      </div>
                        
           </fieldset>
                       <div class="donate-button" style="margin: 53px 0px 0px 0px;text-align: center; padding: 10px 0px;">
                                 <a class="btn-default blue" style="padding: 14px 44px;font-size:17px">DONATE</a>
                     
                     </div> <!--about-left-button-->
           </form>

               </div>

            </div> 
       </div>
   
   </div>
</section>


<!--................................video..........................-->
<section id="video">
  <div class="section-overlay">
    <div class="container-fluid">
        <div class="row wow zoomIn animated" >
          <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/yENYxq75Kjw?autoplay=1">
                                    <!-- PLAY BUTTON -->
                                    <span class="play">
                                       <i class="fa fa-play fa-3x"  aria-hidden="true" style="padding:20px;margin-left:9px"></i>
                                    </span>
                                   
             
           </a>
            <div style="">
             <div class="horizontal-line">
									<hr style="margin-top: 50px;
    margin-bottom: 20px;">
                    </div>
             <p style="    text-align: center;
    color: #fff;
    font-weight: 500;
    font-size: 18px;"> TAKE A LOOK TO OUR ACTIVITY</p>
            </div>
        </div>
    </div>  
 </div>      
</section>



<!----------------------------STORY----------------------------- -->
<section id="gallery" style="padding:80px 0px 135px">
        <div class="container">
            <div class="row">
               <h1 class="quest-header">GALLARY</h1> 
                    <div class="horizontal-line">
									<hr>
                    </div>
                <p class="quest-paragraph wow fadeIn animated" style="margin-bottom:0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                </p>
               
               <div class="row no-gutter wow zoomIn animated" style="margin-top:75px">
                   <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="box">
                          <figure>
                               <img src="img/gallery1.jpg" class="img-responsive" alt="">
                          </figure>
                          <div class="over-layer">
                           <a title="First Image" class="fancybox" rel="portfolio-1" href="img/pop-up.jpg">
                               <i class="fa fa-search"></i>
                            </a>
                            <a href="#" class="fa fa-facebook"></a>
                          </div>
                      </div>
                   </div>
                   
                           
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="box">
                          <figure>
                               <img src="img/gallery2.jpg" class="img-responsive" alt="">
                          </figure>
                          <div class="over-layer">
                           <a title="First Image" class="fancybox" rel="portfolio-1" href="img/pop-up.jpg">
                               <i class="fa fa-search"></i>
                            </a>
                           <a href="#" class="fa fa-facebook"></a>
                          </div>
                      </div>
                   </div>
                  
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="box">
                          <figure>
                               <img src="img/gallery3.jpg" class="img-responsive" alt="">
                          </figure>
                          <div class="over-layer">
                            <a title="First Image" class="fancybox" rel="portfolio-1" href="img/pop-up.jpg">
                               <i class="fa fa-search"></i>
                            </a>
                            <a href="#" class="fa fa-facebook"></a>
                          </div>
                      </div>
                   </div>
                    
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="box">
                          <figure>
                               <img src="img/gallery4.jpg" class="img-responsive" alt="">
                          </figure>
                          <div class="over-layer">
                           <a title="First Image" class="fancybox" rel="portfolio-1" href="img/pop-up.jpg">
                               <i class="fa fa-search"></i>
                            </a>
                            <a href="#" class="fa fa-facebook"></a>
                          </div>
                      </div>
                   </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="box">
                          <figure>
                               <img src="img/gallery5.jpg" class="img-responsive" alt="">
                          </figure>
                          <div class="over-layer">
                           <a title="First Image" class="fancybox" rel="portfolio-1" href="img/pop-up.jpg">
                               <i class="fa fa-search"></i>
                            </a>
                           <a href="#" class="fa fa-facebook"></a>
                          </div>
                      </div>
                   </div>
               
                 <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="box">
                          <figure>
                               <img src="img/gallery6.jpg" class="img-responsive" alt="">
                          </figure>
                          <div class="over-layer">
                            <a title="First Image" class="fancybox" rel="portfolio-1" href="img/pop-up.jpg">
                               <i class="fa fa-search"></i>
                            </a>
                          <a href="#" class="fa fa-facebook"></a>
                          </div>
                      </div>
                   </div>
 


               </div>
            </div>
        </div>
    </section>


<!--THIS IS DYNAMIC CONTACT-->
<?php include('includes/contact.php'); ?><!--DYNAMIC CONTACT ENDS-->


<!--THIS IS DYNAMIC FOOTERINFO-->
<?php include('includes/footerinfo.php'); ?><!--DYNAMIC FOOTERINFO ENDS-->

<!--THIS IS FOOTER NAVBER-->
<?php include('includes/footer.php'); ?><!--DYNAMIC FOOTER ENDS-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.4.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/jquery.easing.min.js"></script>
     <script src="js/isotope.min.js"></script>
     <script src="js/jquery.syotimer.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
     <script src="js/owl.carousel.js"></script>
     <script src="js/parallax.js-1.4.2/parallax.min.js"></script>
     <script src="js/jquery.fancybox.pack.js"></script>
     <script src="js/main.js"></script>
	  
    
<script>
  

//$("#selector_that_matches_zero_elements").mCustomScrollbar("destroy");
</script>
</body>
</html>
