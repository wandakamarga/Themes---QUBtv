
//mediacheck
$(function() {
  mediaCheck({
    media: '(min-width: 769px)',
    entry: function() {
      $( ".panel_nav" ).removeClass( "panel_nav_small" );
      $( ".panel_nav" ).removeClass( "panel_nav_small_button" );
    },
    exit: function() {
      $( ".panel_nav" ).addClass( "panel_nav_small" );
      $( ".panel_nav" ).removeClass( "panel_nav_small_button" );
    }
  });
});
//toggle panel
$(function() {
	$('.panel_nav_small_button').click(function() {
	    $('.panel_ul').slideToggle(1000);
	});
});
//panel expand
$(function() {
    //caches a jQuery object containing the header element
    var header = $(".panel");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            header.removeClass('panel').addClass("panel_fold");
        } else {
            header.removeClass("panel_fold").addClass('panel');
        }
    });
});
//tooltip
$(document).ready(function() {
    $('.tooltip').tooltipster({
      theme: 'panel_tooltip'
  });
});