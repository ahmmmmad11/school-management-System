function footer(){
	$("#footer").addClass("navbar-fixed-bottom");
	var top = $(window).scrollTop();
	$(window).on("scroll", function(){
		if (top > 0) {
        $("#footer").removeClass("navbar-fixed-bottom");
     }
     else{
         
     }
	});
     
}
$(function(){
	
     footer();
});