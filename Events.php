<?php include('includes/arrays.php'); ?>
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
<link rel="stylesheet" href="css/Event.css" type="text/css">
<!-- Important Owl stylesheet -->


<!--font-awesome-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


</head>
<!--[if IE]>
<style>
    #event-list .event-image img {
     height:490px;
     width:100%;
}
</style>
<![endif]-->
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
                <h1>WE BELEIVE IN HAPPINESS</h1>
                <p style="max-width: 679px;margin: 20px auto 30px;">We believe that the best way to multiply happiness is to share it with others. Our motto is to sharing happiness through making changes in the society
                </p>
          
           <a class="btn-default white">Learn More</a>
           </div> <!--header-text-->
        </div> <!--parallax-slider-->

        </div> <!--row-->
     </div>

    <!--</header>-->
 </div>
 </section>
     
  



  
<!--EVENT-LIsT -->
 
<section id="event-list" style="padding:40px 0px 70px">
   <!-- Demo Content -->
  <div class="container">

 
 <div class="row">
 <div id="filters_and_sorters">
<div id="sorting" class="flipInX">
<select id="area_filter">
<option value="all" selected="selected">ALL EVENTS</option>
<option value=".bikes">DONATION</option>
<option value=".cars">HELPING</option>
<option value=".bikes">CHARITY </option>
<option value=".hedgehogs">FUNDRISING</option>
<option value=".cakes">CEREMONY</option>
</select>

<div class="search" style="position: relative;display:inline-block">
 <input type="text" id="input" placeholder="SEARCH">
 <span style="position: absolute; top: 13px;color: #fff;left: 199px;font-size: 16px;" class="fa fa-search"></span>
</div>


<select id="rating_filter">
<option value="all" selected="selected">SORT BY:NEWEST EVENT</option>
<option value=".8">LATEST EVENTS</option>
<option value=".4">OLDEST EVENTS</option>
<option value=".5">UPCOMING EVENTS</option>

</select>


<hr style="width: 200%; height: 1px;margin-top: 45px; margin-left: -136px;">
</div>


<div id="container">
<div class="mix boats 8  " data-rating="1">
    <p class="title" style="display:none">WATER</p>
             <div class="row clearfix no-gutter wow slideInLeft animated ">
                  <div class="col-md-6 col-sm-12 ">
                     <div class="event-image">
                      
                         <img src="img/EVENT1.jpg" class="img-responsive" alt=""/>
                     
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12 event-right" >
                      <div class="content-box">
              
                                <div class="event-header"><h4>SPONSOR A CHILD</h4></div>
                                  <div class="horizontal-line" style="    width: 0px;height: 3px; margin: -11px 0px 20px;">
									<hr>
                                  </div>
                                  <div class="text">Education is not an opportunity,it is a fundamental right of every children. But too many children in Bangladesh aren’t getting the opportunity.You can help change this by sponsoring a child. You can sponsor a child of us by donating 650tk per month for a year or by donating 7800tk annually.Your donation can assure bringing a better & brighter future of a child. 
                                   </div>
                                <div class="donation-progress-box">
                                   <div class="donation-values">
                                        Donation :  <span class="value">0</span> / <span class="value">120 Students</span>
                                    </div>
                                     <div class="event-sub-header"><h4>DONATION</h4></div>
                                  <span class="menu-price">0%</span>
                                    <div class="donation-progress-bar">
                                       
                                        <div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 5%;"></div>
                                    </div>
                                   <span class="raised" style="float:left">Reach:0</span>
                                   <span class="goal" style="float:right">Goal:120 Students</span>
                                </div>
                                <div class="event-button">
                                <a href="#" class="event-button1 blue"  >DONATE</a>
                                <a href="Single-event.php?item=sponsor-a-child;" class="event-button2 blue" style="margin-left:21px">VIEW EVENT</a>
                              <div class="clearfix"></div>
                               </div>
                      </div>
               </div>
    </div>
</div>
<div class="mix cars 4 " data-rating="2">
       <p class="title" style="display:none">HELP</p>
           <div class="row clearfix no-gutter wow slideInLeft animated">
                  <div class="col-md-6 col-sm-12 ">
                     <div class="event-image">
                      
                         <img src="img/EVENT2.jpg" class="img-responsive" alt=""/>
                     
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12 event-right" >
                      <div class="content-box">
              
                                <div class="event-header title"><h4>WINTER CLOTH DISTRIBUTION</h4></div>
                                  <div class="horizontal-line" style="width: 0px;height: 3px;margin: -11px 0px 20px;">
									<hr>
                                  </div>
                                  <div class="text">A huge portion of the population of our country is living under poverty line not having adequate capacity to cope with extreme weather events such as severe cold waves.From the last three years we have distributed winter cloths among 2000 families. This year we are also going to help 500 families with a blanket each. You can provide a helping hand by donating us.
                                   </div>
                                <div class="donation-progress-box">
                                   <div class="donation-values">
                                        Donation :  <span class="value">0</span> / <span class="value">1,25,000 tk</span>
                                    </div>
                                     <div class="event-sub-header"><h4>DONATION</h4></div>
                                  <span class="menu-price">0%</span>
                                    <div class="donation-progress-bar">
                                       
                                        <div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 5%;"></div>
                                    </div>
                                   <span class="raised" style="float:left">Rasied:0</span>
                                   <span class="goal" style="float:right">Goal:1,25,000 tk</span>
                                </div>
                                <div class="event-button">
                                <a href="#" class="event-button1 blue"  >DONATE</a>
                                <a href="Single-event.php?item=winter-cloth-distribution;" class="event-button2 blue" style="margin-left:21px">VIEW EVENT</a>
                              <div class="clearfix"></div>
                               </div>
                      </div>
                    </div></div>
          </div>
<div class="mix bikes 4" data-rating="3">
 <p class="title" style="display:none">SAVE</p>
     <div class="row clearfix no-gutter wow slideInLeft animated">             
                  <div class="col-md-6 col-sm-12 ">
                     <div class="event-image">
                      
                         <img src="img/EVENT3.jpg" class="img-responsive" alt=""/>
                     
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12 event-right" >
                      <div class="content-box">
              
                                <div class="event-header"><h4>BOOK FIESTA</h4></div>
                                  <div class="horizontal-line" style="    width: 0px; height: 3px;margin: -11px 0px 20px;">
									<hr>
                                  </div>
                                  <div class="text">To have new book and new dresses is always like a festival for the children in our country. But the children from the impoverished family can hardly feel this treasure of joy. To bring happiness among our children, we are going to uphold a Book Fiesta, to distribute new books, new dresses and new source of joy for them.
                                   </div>
                                <div class="donation-progress-box">
                                   <div class="donation-values">
                                        Donation :  <span class="value">0</span> / <span class="value">200000</span>
                                    </div>
                                     <div class="event-sub-header"><h4>DONATION</h4></div>
                                  <span class="menu-price">0%</span>
                                    <div class="donation-progress-bar">
                                       
                                        <div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 5%;"></div>
                                    </div>
                                   <span class="raised" style="float:left">Rasied:0/-</span>
                                   <span class="goal" style="float:right">Goal:200000/-</span>
                                </div>
                                <div class="event-button">
                                <a href="#" class="event-button1 blue"  >DONATE</a>
                                <a href="Single-event.php?item=book-fiesta;" class="event-button2 blue" style="margin-left:21px">VIEW EVENT</a>
                              <div class="clearfix"></div>
                               </div>
                      </div>
                    </div></div></div>
<div class="mix hedgehogs 4" data-rating="4">
 <p class="title" style="display:none">YOUTH</p>
      <div class="row clearfix no-gutter wow slideInLeft animated">
                  <div class="col-md-6 col-sm-12 ">
                     <div class="event-image">
                      
                         <img src="img/EVENT4.jpg" class="img-responsive" alt=""/>
                     
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12 event-right" >
                      <div class="content-box">
              
                                <div class="event-header"><h4>A TOY TO BRING THEM JOY</h4></div>
                                  <div class="horizontal-line" style="    width: 0px; height: 3px; margin: -11px 0px 20px;">
									<hr>
                                  </div>
                                  <div class="text">Toys and games provide a way to meaningfully engage children as well as teaching valuable life skills. We want to ensure that the needy children of our school are given the opportunity to have the experiences that every child deserves. So this year we are going to distribute toys, games, dolls to all of them so that they can also have a happy life like the advantaged children. 
                                   </div>
                                <div class="donation-progress-box">
                                   <div class="donation-values">
                                        Donation :  <span class="value">0</span> / <span class="value">40000</span>
                                    </div>
                                     <div class="event-sub-header"><h4>DONATION</h4></div>
                                  <span class="menu-price">0%</span>
                                    <div class="donation-progress-bar">
                                       
                                        <div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 5%;"></div>
                                    </div>
                                   <span class="raised" style="float:left">Rasied:0Tk</span>
                                   <span class="goal" style="float:right">Goal:40000Tk</span>
                                </div>
                                <div class="event-button">
                                <a href="#" class="event-button1 blue"  >DONATE</a>
                                <a href="Single-event.php?item=a-toy-to-bring-them-joy;" class="event-button2 blue" style="margin-left:21px">VIEW EVENT</a>
                              <div class="clearfix"></div>
                               </div>
                      </div>
                 </div>
         </div>
</div>
<div class="mix cakes 5" data-rating="4">
    <p class="title" style="display:none">SPONSOR</p>
   <div class="row clearfix no-gutter wow slideInLeft animated">
                  <div class="col-md-6 col-sm-12 ">
                     <div class="event-image">
                      
                         <img src="img/EVENT5.jpg" class="img-responsive" alt=""/>
                     
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12 event-right" >
                      <div class="content-box">
              
                                <div class="event-header"><h4>A MEAL TO CHILL</h4></div>
                                  <div class="horizontal-line" style="    width: 0px; height: 3px;margin: -11px 0px 20px;">
									<hr>
                                  </div>
                                  <div class="text">As our students aren’t belonging from wealthy families, hardly they can have a delightful meal. When you are having a rich food, they are hungering in a need of food. So you can sponsor or contribute for arranging a meal in every month to make them delight and to make them feel contented.  A meal to chill is always open to make them smile.
                                   </div>
                                <div class="donation-progress-box">
                                   <div class="donation-values">
                                        Donation :  <span class="value">0</span> / <span class="value">40000Tk</span>
                                    </div>
                                     <div class="event-sub-header"><h4>DONATION</h4></div>
                                  <span class="menu-price">0%</span>
                                    <div class="donation-progress-bar">
                                       
                                        <div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 5%;"></div>
                                    </div>
                                   <span class="raised" style="float:left">Rasied:0</span>
                                   <span class="goal" style="float:right">Goal:40000</span>
                                </div>
                                <div class="event-button">
                                <a href="#" class="event-button1 blue"  >DONATE</a>
                                <a href="Single-event.php?item=a-meal-to-chill;" class="event-button2 blue" style="margin-left:21px">VIEW EVENT</a>
                              <div class="clearfix"></div>
                               </div>
                      </div>
                    </div></div></div>




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
     <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/jquery.easing.min.js"></script>
     <script src="js/isotope.min.js"></script>
     <script src="js/jquery.syotimer.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
     <script src="js/owl.carousel.js"></script>
     <script src="js/parallax.js-1.4.2/parallax.min.js"></script>
     <script src="js/jquery.mixitup.min.js"></script>
     <script src="js/jquery.fancybox.pack.js"></script>
     <script src="js/script.js"></script>
     <script src="js/main.js"></script>
	  
    

</body>
</html>
