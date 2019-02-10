$(function(){

	 if (window.location.hash == "#st-reg") {
       $(".s-reg").fadeIn();
    }
    if (window.location.hash == "#st-sho") {
       $(".s-show").fadeIn();
       $(".s-reg").fadeOut();
    }
    if (window.location.hash == "#st-reg") {
       $(".s-reg").fadeIn();
    }
	$("#s-reg").on("click", function(){
		$(".s-show").fadeOut();
		$(".s-grad").fadeOut();
		$(".s-unreg").fadeOut();
		$(".s-elite").fadeOut();
		$(".s-block").fadeOut();
		$(".s-reg").fadeIn();
	});
	$("#s-show").on("click", function(){
		$(".s-reg").fadeOut();
		$(".s-grad").fadeOut();
		$(".s-unreg").fadeOut();
		$(".s-elite").fadeOut();
		$(".s-block").fadeOut();
		$(".s-show").fadeIn();
	});
	$("#s-grad").on("click", function(){
		$(".s-show").fadeOut();
		$(".s-reg").fadeOut();
		$(".s-unreg").fadeOut();
		$(".s-elite").fadeOut();
		$(".s-block").fadeOut();
		$(".s-grad").fadeIn();
	});
	$("#s-unreg").on("click", function(){
		$(".s-show").fadeOut();
		$(".s-grad").fadeOut();
		$(".s-reg").fadeOut();
		$(".s-elite").fadeOut();
		$(".s-block").fadeOut();
		$(".s-unreg").fadeIn();
	});
	$("#s-elite").on("click", function(){
		$(".s-show").fadeOut();
		$(".s-grad").fadeOut();
		$(".s-unreg").fadeOut();
		$(".s-reg").fadeOut();
		$(".s-block").fadeOut();
		$(".s-elite").fadeIn();
	});
	$("#s-block").on("click", function(){
		$(".s-show").fadeOut();
		$(".s-grad").fadeOut();
		$(".s-unreg").fadeOut();
		$(".s-elite").fadeOut();
		$(".s-reg").fadeOut();
		$(".s-block").fadeIn();
	});

});