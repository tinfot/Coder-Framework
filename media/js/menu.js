/**
 * Scrolls slowly to an anchor.
 * @param id
 */
function goToByScroll(id){
      $('html,body').animate({scrollTop: $("a[name="+id+"]").offset().top},'slow');
}

// Make sidebar follow scroll
$(document).ready(function(){
	var top = $("#sidebar").offset().top;
	
	$(window).scroll(function(){
		var y = $(window).scrollTop() + 20;
		
		if(y >= top){
			$("#sidebar").addClass('fixed');
		} else {
			$("#sidebar").removeClass('fixed');
		}
	});
});