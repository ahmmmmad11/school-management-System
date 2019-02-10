function sayna(){
	$("#sayna").on("click", function(){
		$(".ar").addClass("hide");
		$(".out").addClass("hide");
		$(".khowarithm-hedden").addClass("hide");
		$(".sn").removeClass("hide");
		$(".sayna-hedden").removeClass("hide");
		$("#en").addClass("hide");
		$("#co").removeClass("hide");
		$("#bi").removeClass("hide");
	});
}
function rushd(){
	$("#rushd").on("click", function(){
		$(".ar").addClass("hide");
		$(".out").addClass("hide");
		$(".khowarithm-hedden").addClass("hide");
		$(".sayna-hedden").addClass("hide");
		$(".sn").removeClass("hide");
		$("#co").addClass("hide");
		$("#bi").addClass("hide");
		$("#en").removeClass("hide");
	});
}
function khowarithm(){
	$("#khowarithm").on("click", function(){
		$(".sn").addClass("hide");
		$(".out").addClass("hide");
		$(".sayna-hedden").addClass("hide");
		$(".ar").removeClass("hide");
		$(".khowarithm-hedden").removeClass("hide");
	});
}
$(function(){
	$("#first").on("click", function(){
		$(".second").addClass("hide");
		$(".khowarithm-hedden").addClass("hide");
		$(".sayna-hedden").addClass("hide");
		$(".third").addClass("hide").delay(500);
		$(".first").removeClass("hide");
		$(".ar").removeClass("hide");
		$(".out").removeClass("hide");
		$(".sn").removeClass("hide");
		$("#en").removeClass("hide");
	});

	$("#second").on("click", function(){
		$(".first").addClass("hide");
		$(".khowarithm-hedden").addClass("hide");
		$(".sayna-hedden").addClass("hide");
		$(".third").addClass("hide").delay(500);
		$(".second").removeClass("hide");
		$(".ar").removeClass("hide");
		$(".out").removeClass("hide");
		$(".sn").removeClass("hide");
		$("#en").removeClass("hide");
	});

	$("#third").on("click", function(){
		$(".second").addClass("hide");
		$(".first").addClass("hide").delay(500);
		$(".third").removeClass("hide");
	});

	sayna();
	rushd();
	khowarithm();
});