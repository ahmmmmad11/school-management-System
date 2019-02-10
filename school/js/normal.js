function set_mark(x , y){
	$(x).on("keyup", function(){
		var v = $(x).val();
		if (v >= 90) {
			$(y).text("ممتاز");
		}
		else if (v >= 80 && v <90) {
			$(y).text("جيد جدا");
		}
		else if (v >= 70 && v <80) {
			$(y).text("جيد");
		}
		else if (v >= 60 && v <70) {
			$(y).text("مقبول");
		}
		else if (v >= 50 && v <60) {
			$(y).text("نجاح");
		}
		else{
			$(y).text("رسوب");
		}
	});
}

function field(){
	$("#degree").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
}

function send(s){
	var data = $(s).serialize();
	$.ajax({
		url: "./classes/adding-dgrees.php",
		method: "post",
		data: data,
		success: function(result){
			 // window.location="./classes/adding-dgrees.php";
		}
	});
}

$(function(){
	$(".admin-item").remove();
	
	var i=0;
	fi = "#degree";
	td = "#res";
	while(i<100){
		i++;
		set_mark(fi+i , td+i);
	}
	field();
	$("#save-degree").on("click", function(){
		var j = 0;
		    e = "#degree-form";
		while(j < 100){
			j++;
			send(e+j);
		}
	});
});