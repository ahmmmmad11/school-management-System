$(function(){
	$("#bh1").on("click", function(){
		$("#bh").empty().append("<select name ='name' class='form-control' id='sel-to-del'></select>");
		showDel();
	});
	$("#mn1").on("click", function(){
		$("#mn").empty().append("<select name ='name' class='form-control' id='sel-to-del'></select>");
		showDel();
	});
	$("#fs1").on("click", function(){
		$("#fs").empty().append("<select name ='name' class='form-control' id='sel-to-del'></select>");
		showDel();
	});
});

//html("<select name ="name" class='form-control' id='sel-to-del'></select>")