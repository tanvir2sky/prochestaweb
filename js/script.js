

  function initFilters() {
$('#container').mixItUp({
layout: {
display: 'block'
},
animation: {
duration: 1000,
effects: 'translateZ(-360px) stagger(110ms) fade',
easing: 'ease'
}
});
}

// do something on mixEnd <-- added here

initFilters();

// BEGIN area and rating filter
$('#area_filter, #rating_filter').on('change', function () {
$('#container').mixItUp('filter',this.value);

// <-- removed from here

});
// END area and rating filter

// BEGIN area filter message
$('#area_filter').on('change', function () {
var area = this.value;
if (area != "all") {
$('#message_area').css("display","block");
var area = area.replace('.', '');
$('#message_area').html("");
$('#message_area').append("<p>You are viewing entries related to " + area + ".</p>");
}
else {
$('#message_area').html("");
$('#message_area').css("display","none");
}
});
// END area filter message

// BEGIN rating filter message
$('#rating_filter').on('change', function () {
var rating = this.value;
if (rating != "all") {
if ($('.mix').is(this.value)) { 
$('#message_area').css("display","block");
$('#message_area').html("");
$('#message_area').append("<p>Here are some things:</p>");
}
else {
$('#message_area').css("display","block");
$('#message_area').html("");
$('#message_area').append("<p>There are no things.</p>");
}
}
else {
$('#message_area').html("");
$('#message_area').css("display","none");
}
});
// END rating filter message

jQuery(document).ready(function($) {  




// site preloader -- also uncomment the div in the header and the css style for #preloader
$(window).load(function(){
	$('#preloader').fadeOut('slow',function(){$(this).remove();});
});

});



//search
$(function() {

  $("#container").mixItUp();

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
        $("#container").mixItUp('filter', $matching);
      }

      else {
        // resets the filter to show all item if input is empty
        $("#container").mixItUp('filter', 'all');
      }
    }, 200 );
  });
})



//$("#selector_that_matches_zero_elements").mCustomScrollbar("destroy");
