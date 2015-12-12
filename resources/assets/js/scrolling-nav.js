//jQuery to collapse the navbar on scroll
/*
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
		 $(".navbar-fixed-top").removeClass("top-test");
		 $(".navbar-collapse").removeClass("top-test-enable");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
		$(".navbar-fixed-top").addClass("top-test");
		$(".navbar-collapse").addClass("top-test-enable");
    }
});
/*
$(document).ready(function(){
	$("div[howmuchdoismell='alot']").click(function(){
		console.log("lol");
		$(this).css("height","500px");
	});
});
*/
//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {

	
    $('a.page-scroll').bind('click', function(event) {
        console.log("123test");
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - $('.navbar').height()
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});



/*
)
$(ELEMENT).FUNCTION(function(){
	
});




*/
$('.carousel').carousel();