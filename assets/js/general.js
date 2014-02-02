

$(window).load(function() {

  $("article a[href^='http://']").attr("target","_blank");

$('#PageRefresh').click(function() {
 
	location.reload();
 
});
 
 $('#menu').click(function() {
  			$('#nav').toggleClass('active');
  			$('#menu').toggleClass('openmenu');
     	    $('#archives').slideToggle('fast');
     	    return false;
  
  });
  
  $('#container').click(function () {
  
  	$('#archives').slideUp('fast');
  	$('#nav').removeClass('active');
  	
  
  });
  
  $('#nav').click(function () {
  
  	$('#nav').addClass('active');
  	
  
  });
  
  $('#thewhyaxis').hover( function () {
  
  	$('#homelabel').fadeToggle('fast');
  	
  })

  $('#commentcount').click(function(){
  $.scrollTo( '#comments', 500, { easing:'swing' });
  return false;
});



});


if (document.documentElement.clientWidth >= 1000) {


$(window).load(function() {


$('#reload').addClass('largesize');


//--------------------------------------------------------------------------------------------
//DEFINE FUNCTIONS
//--------------------------------------------------------------------------------------------

function isScrolledIntoView(elem) {
	var docViewTop = $(window).scrollTop() +250;
    var docViewBottom = $(window).scrollTop() + 251;

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom));
}




//--------------------------------------------------------------------------------------------
// SHOW / HIDE AS YOU SCROLL THROUGH THE DIFFERENT SECTIONS
//--------------------------------------------------------------------------------------------

$('#post-1').addClass('currentpost');
$('#post-2').addClass('nextpost');



$(window).scroll(function() {

   
   		$('.section').each(function(){
   			
   			if(isScrolledIntoView(this)) { 
        		$(this).addClass('currentpost');
        		$(this).children('.graphic').fadeIn(350);
        		$('#post-1').removeClass('nextpost');
				$(this).prev('.post').addClass('prevpost');
				$(this).next('.post').addClass('nextpost');
				$(this).children()
				
        	} else {
        		$(this).removeClass('currentpost');
        		$(this).children('.graphic').fadeOut(350);
        		$(this).prev('.post').removeClass('prevpost');
				$(this).next('.post').removeClass('nextpost');
        	}
   			
   		});
 
   		    
});



//
//$('.postitem').hover( function () {
//
//	$('.postitem').toggleClass('currentpost');
//	$(this).children('.graphic').fadeIn(350);
//	
//})




$('.next').click(function(){
	$.scrollTo( '.nextpost', 500, {offset:-50}, {easing:'swing'} );
	return false;
});

$('.prev').click(function(){
	$.scrollTo( '.prevpost', 500, {offset:-50}, {easing:'swing'} );
	return false;
});

$('.prev').dblclick(function(){
  $('body,html').animate({
        scrollTop: 0
      }, 500);
  return false;
});


//$('.next').click(function(){
//	$('.section').trigger('next')
//  return false;
//});




//--------------------------------------------------------------------------------------------
// DETERMINE SECTION POSITIONS TO SCROLLæTO
//--------------------------------------------------------------------------------------------

var post1_pos = $('#post-1').position('top');
	post1_pos = post1_pos.top;
	post1_pos = post1_pos -55;

//





});

}

else {

	$(window).load(function() {

	$('#reload').addClass('smallsize');
	
	});

}