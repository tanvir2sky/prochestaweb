//<![CDATA[
        $(window).load(function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(1050).fadeOut('slow'); // will fade out the white DIV that covers the website.
            
        })
    //]]>

///modal


//parallax
$('.parallax-window').parallax({imageSrc: '../img/header-bg.jpg'});


//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});



new WOW().init();


//owl carousl2
//owl-carousel
$(document).ready(function() {

//Function for the owlCarousel to be slided
 
  $("#owl-demo2").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
       items : 1,
       stopOnHover:true,
       itemsDesktop : [1199,2],
       itemsDesktopSmall : [979,2],
      itemsCustom:[[440,1],[600, 1], [700, 1], [1200, 1], [1600, 1]],
 
  });
});






//counter-start

$(function() {
    var oTop = $('.counter').offset().top - $(window).height();
    $(window).scroll(function(){

       var scrollTop = window.pageYOffset;
        if( scrollTop > oTop ){
            start_count();
        }
    });
});

//couter
function start_count(){
		$('.counter').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 20000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  
  

});
 
}   //Add your code here






//owl-carousel
$(document).ready(function() {

//Function for the owlCarousel to be slided
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 1500, //Set AutoPlay to 3 seconds
       //items : 3,
      
     stopOnHover:true,
     responsive: true,
      responsiveRefreshRate : 200,
      responsiveBaseWidth: window,
      items : 4,
    itemsCustom : false,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,2],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : false,
    itemsScaleUp : false,
    
    
 
  });


 
});

$('.carousel').carousel()


$(window).scroll(function() {
    if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
    {
        $('.opaque-navbar').addClass('opaque');
    } else {
        $('.opaque-navbar').removeClass('opaque');
    }
});

$('#someTab').tab('show');

(function(){
  // setup your carousels as you normally would using JS
  // or via data attributes according to the documentation
  // http://getbootstrap.com/javascript/#carousel
  $('#carousel123').carousel({ interval: 2000 });
  $('#carouselABC').carousel({ interval: 3600 });
}());

(function(){
  $('.carousel-showsixmoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<3;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());

jQuery(document).ready(function($) {


/*
|--------------------------------------------------------------------------
| Global myTheme Obj / Variable Declaration
|--------------------------------------------------------------------------
|
|
|
*/

	var myTheme = window.myTheme || {},
    $win = $( window );
	


/*
|--------------------------------------------------------------------------
| isotope
|--------------------------------------------------------------------------
|
|
|
*/		

	myTheme.Isotope = function () {
	
		
		// 3 column layout
		var isotopeContainer2 = $('.isotopeContainer2');
		if( !isotopeContainer2.length || !jQuery().isotope ) return;
		$win.load(function(){
			isotopeContainer2.isotope({
				itemSelector: '.isotopeSelector'
			});
		$('.isotopeFilters2').on( 'click', 'a', function(e) {
				$('.isotopeFilters2').find('.active').removeClass('active');
				$(this).parent().addClass('active');
				var filterValue = $(this).attr('data-filter');
				isotopeContainer2.isotope({ filter: filterValue });
				e.preventDefault();
			});
		});
		
		
		
	};
	
	

/*
|--------------------------------------------------------------------------
| Fancybox
|--------------------------------------------------------------------------
|
|
|
*/		

	myTheme.Fancybox = function () {
		$(".fancybox-pop").fancybox({
			maxWidth	: 900,
			maxHeight	: 700,
			fitToView	: true,
			width		: '80%',
			height		: '80%',
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'elastic',
			closeEffect	: 'none',
			helpers     : {
               title: {
                type: 'inside',
		       }
			},
			afterShow: function(){
            var customContent = "<div class='customHTML'>My custom content</div>";
            $('.fancybox-inner').append(customContent);
            }
			
		});
	
	};
		
	
		
	
	

/*
|--------------------------------------------------------------------------
| Functions Initializers
|--------------------------------------------------------------------------
|
|
|
*/
	
	myTheme.Isotope();
	myTheme.Fancybox();
	
	

});


 

//GIVE-MAP

/*$(document).on( "click",".location",
     function() {
      $( this ).fadeOut( 'slow' );
});
*/
  $(function(){
     $("#map").click(function(){

     $(".location").fadeOut( 'slow');
     
     });
  });   



//timers
 $('.timer').syotimer({
                year: 2016,
                month:10 ,
                day: 9,
                hour: 20,
                minute: 30,
            });

//poup-video
$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        //maxWidth	: 900,
		//maxHeight	: 700,
		fitToView	: true,
		//width		: '80%',
		//height		: '80%',
        autoSize	: false,
	    closeClick	: false,
        openEffect  : 'elastic',
        closeEffect : 'elastic',
        nextEffect  : 'none',
        prevEffect  : 'none',
        padding     : 0,
        helpers: {
            media: true
        },
        youtube: {
            autoplay: 1, // enable autoplay
            start: 1 // set start time in seconds (embed)
        },
       // margin      : [20, 60, 20, 60] // Increase left/right margin
    });

//sort-table
$(function() {

  $(".container").mixItUp();

  var inputText;
  var $matching = $();

  // Delay function
  var delay = (function(){
    var timer = 0;
    return function(callback, ms){
      clearTimeout (timer);
      timer = setTimeout(callback, ms);
    };
  })();

  $("#input").keyup(function(){
    // Delay function invoked to make sure user stopped typing
    delay(function(){
      inputText = $("#input").val().toLowerCase();
      
      // Check to see if input field is empty
      if ((inputText.length) > 0) {            
        $( '.mix').each(function() {
          $this = $("this");
          
           // add item to be filtered out if input text matches items inside the title   
           if($(this).children('.title').text().toLowerCase().match(inputText)) {
            $matching = $matching.add(this);
          }
          else {
            // removes any previously matched item
            $matching = $matching.not(this);
          }
        });
        $(".container").mixItUp('filter', $matching);
      }

      else {
        // resets the filter to show all item if input is empty
        $(".container").mixItUp('filter', 'all');
      }
    }, 200 );
  });
})





