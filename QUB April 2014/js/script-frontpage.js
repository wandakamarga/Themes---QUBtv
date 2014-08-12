//window close-open
$(function() {
	$( ".window_close" ).click(function() {
		$( ".window" ).hide( "fade" );
	});
	$( ".window_maximize" ).click(function() {
		$( ".window_content" ).show( "fade" );
	});
	$( ".window_minimize" ).click(function() {
		$( ".window_content" ).hide( "fade", {direction: "up"}, 500 );
	});
});
$(function() {
	$( ".window_close2" ).click(function() {
		$( ".window2" ).hide( "fade" );
	});
	$( ".window_maximize2" ).click(function() {
		$( ".window_content2" ).show( "fade" );
	});
	$( ".window_minimize2" ).click(function() {
		$( ".window_content2" ).hide( "fade", {direction: "up"}, 500 );
	});
});
$(function() {
	$( ".window_close3" ).click(function() {
		$( ".window3" ).hide( "fade" );
	});
	$( ".window_maximize3" ).click(function() {
		$( ".window_content3" ).show( "fade" );
	});
	$( ".window_minimize3" ).click(function() {
		$( ".window_content3" ).hide( "fade", {direction: "up"}, 500 );
	});
});
$(function() {
	$( ".window_close4" ).click(function() {
		$( ".window4" ).hide( "fade" );
	});
	$( ".window_maximize4" ).click(function() {
		$( ".window_content4" ).show( "fade" );
	});
	$( ".window_minimize4" ).click(function() {
		$( ".window_content4" ).hide( "fade", {direction: "up"}, 500 );
	});
});
//draggabilly
window.onload = function() {

  var items = document.querySelectorAll('.draggable');
  
  for ( var i=0, len = items.length; i < len; i++ ) {
    var item = items[i];
    var draggie = new Draggabilly( item, {
      handle: '.drag'
    });
  }
}
//tooltip
$(document).ready(function() {
    $('.tooltip').tooltipster({
	    theme: 'panel_tooltip'
	});
});
//mediacheck
$(function() {
  mediaCheck({
    media: '(min-width: 480px)',
    entry: function() {
      $( "div" ).addClass( "drag" );
    },
    exit: function() {
      $( "div" ).removeClass( "drag" )
    }
  });
});
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