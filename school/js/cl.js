function showte(){
		$.ajax({
			url: "./classes/show-teachers2.php",
			type: "post",
			success: function(data){
				$("#sel-to-chng").append(data);
			}
		});
	}

function send(){
	 $("#ch").on("click", function(){
        var data = $("#change-sup").serialize();
        $.ajax({
        url: "./classes/classes-students.php",
         type: "post",
         data: data,
         success: function(data){
              $("#st-ack").html(data).fadeIn().delay(1000).fadeOut();
              $("input[type=text]").val("");

               $("#s-s-show")
                .find("tr")
                .remove()
                .end();

            showStudent();
         }
        });
    });

}

function move_student(){
    $("#n-btn").on("click", function(){
        $("#st-id").val()="hi";
        $("#st-name").text("hi");
    });
}

$(function(){
	$("#chng-sup").on("click", function(){
		$("#supervisor").text("").html("<form method='post' id='change-sup' class='form-horizontal'><select id='sel-to-chng' class='form-control col-sm-12' name='name'></select></form>");
        $(this).attr("id","ch");
		showte();
		$("#cancel").removeClass("hide");
		$(this).addClass("click");
	});
    send();

     move_student();
     var top = $(window).scrollTop();
     if (top > 0) {
        $("#footer").removeClass("navbar-fixed-bottom");
     }
     else{
         $("#footer").addClass("navbar-fixed-bottom");
     }
});