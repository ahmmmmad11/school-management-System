function update1(){
	$("#chick").on("click", function(){
		var data= $("#passo").serialize();
		$.ajax({
			url: "./classes/teacher-update.php",
			method: "post",
			data: data,
			success: function(da){
				if (da == "success") {
					$("#passo").hide();
					$("#passo2").removeClass("hide");
				}
			}
		});
	});
}
function button1(){
	$("#btn-general").on("click", function(){
		$("#pass").addClass("hide");
		$("#general").removeClass("hide");
	});
}
function button2(){
	$("#btn-pass").on("click", function(){
		$("#general").addClass("hide");
		$("#pass").removeClass("hide");
	});
}
$(function(){
	
	button1();
	button2();
	update1();
});