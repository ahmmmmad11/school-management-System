

$(function(){
    $("#submit").on("click", function(){
         var user    = $("#username").val();
        var pass     = $("#pass").val();
        var data = $("#login-form").serialize();
        if(user =="" || pass ==""){
            $("#ack").html("املا الحقول رجاءاً").fadeIn(500).delay(1000).fadeOut();
        }
        else{
        
        $.ajax({
        url: "./classes/login.php",
         type: "post",
         data: data,
         success: function(data){
               if (data=="mn" || data=="bh") {
                        window.location = "./pannel.php";
                    }
                else if (data=="fs") {
                        window.location = "./financial/panel.php";
                    }
                else if (data=="user") {
                        window.location = "./panel.php";
                    }
                    else{
                        $("#ack").html("خطا في اسم المستخدم او كلمة المرور").fadeIn(500).delay(1000).fadeOut();
                    }
                    closest("#login-form").find("input[type=text], textarea").val("");
         }
});
    }
    });
});