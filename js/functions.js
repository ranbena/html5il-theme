
// masonry code 
$(document).ready(function() {
  $('#post-grid').masonry({
    itemSelector : '.grid-item',
    columnWidth: function( containerWidth ) {
      return containerWidth / 2;
    },
      isResizable : true,
      isAnimated: true,
      animationOptions: {
        duration: 400,
        easing: 'linear',
        queue: false
      }

  });
});


// hover code for index  templates
$(document).ready(function() {
	
		$('#post-grid .image').hover(
			function() {
				$(this).stop().fadeTo(300, 0.8);
			},
			function() {
				$(this).fadeTo(300, 1.0);
			}
		);	
		
	
});


// comment form values
$(document).ready(function(){
	$("#comment-form input").focus(function () {
		var origval = $(this).val();	
		$(this).val("");	
		//console.log(origval);
		$("#comment-form input").blur(function () {
			if($(this).val().length === 0 ) {
				$(this).val(origval);	
				origval = null;
			}else{
				origval = null;
			};	
		});
	});
});

//$(window).bind('resize', function(){
//
//        var width = $('.body-width').outerWidth();
//
//        /* Make sure we destroy the Isotope when we get to a single column level to reduce stress */
//        if (width >= 768) {
//            if (pb_isotope_on(postGrid) == true) {
//                postGrid.isotope('reLayout');
//            } else {
//                pb_isotope_init(postGrid, 'article');
//            }
//        } else if (pb_isotope_on(postGrid) == true) {
//            postGrid.isotope('destroy');
//        }
//
//        headerHeight = $('.header').height();
//
//    });

// clear text area
$('textarea.comment-input').focus(function() {
   $(this).val('');
});