function showStudent(){
	$.ajax({
		url: "./classes/show-students.php",
		type: "post",
		success: function(data){
			$("#s-s-show").append(data);
		}
	});
}

function showStudentUnreg(){
	$.ajax({
		url: "./classes/unreg.php",
		type: "post",
		success: function(data){
			$("#s-unreg-id").append(data);
		}
	});
}

$(function(){
	showStudent();
	showStudentUnreg();
});