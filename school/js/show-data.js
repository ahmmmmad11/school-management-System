function showDel(){
		$.ajax({
			url: "./classes/show-teachers2.php",
			type: "post",
			success: function(data){
				$("#sel-to-del").append(data);
			}
		});
	}

function tableShow(){
	$.ajax({
		url: "./classes/show-teachers.php",
		type: "post",
		success: function(data){
			$("#t-t-show").append(data);
		}
	});
}

function secShow(){
	$.ajax({
		url: "./classes/show-secs.php",
		type: "post",
		success: function(data){
			$("#t-sec-show").append(data);
		}
	});
}

// function manShow(){
// 	$.ajax({
// 		url: "./classes/occu.php",
// 		type: "post",
// 		success: function(data){
// 			$("#").append(data);
// 		}
// 	});
// }




// function show-sec-det(y){
// 	$.ajax({
// 		url: "./classes/occu.php",
// 		type: "post",
// 		data: y,
// 		success: function(data){
// 			$("#t-man-show").append(data);
// 		}
// 	});
// }

function call(){
	$("#s1").on("click", function(){

	});
	$("#s2").on("click", function(){
		$("#t-tsec").append("hello");
		$("#sub").empty();
	});
	$("#s3").on("click", function(){
		
	});
	$("#s4").on("click", function(){
		
	});
	$("#s5").on("click", function(){
		
	});
	$("#s6").on("click", function(){
		
	});
	$("#s7").on("click", function(){
		
	});
	$("#s8").on("click", function(){
		
	});
	$("#s9").on("click", function(){
		
	});
	$("#s10").on("click", function(){
		
	});
	$("#s11").on("click", function(){
		
	});
	$("#s12").on("click", function(){
		
	});
	$("#s13").on("click", function(){
		
	});
	$("#s14").on("click", function(){
		
	});
}


$(function(){
	
	
	tableShow();
	// manShow();
	showDel();
	secShow();
	call();
	// showStudent();

});