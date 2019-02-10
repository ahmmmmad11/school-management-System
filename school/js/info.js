$(function(){
    $("#te-in-sub").on("click", function(){
        
        var data = $("#teacher-in").serialize();
        
        $.ajax({
        url: "./classes/register.php",
         type: "post",
         data: data,
         success: function(data){
              $("#ack").html(data).fadeIn().delay(1000).fadeOut();
              $("input[type=text]").val("");

               $("#sel-to-del")
                .find("option")
                .remove()
                .end()
                .append("<option value='whatever'></option>")
                .val("whatever");

            showDel();

             $("#t-t-show")
                .find("tr")
                .remove()
                .end();

            tableShow();
         }
        });
    });


        $("#st-in-sub").on("click", function(){
        
        var data = $("#new-student").serialize();
        
        $.ajax({
        url: "./classes/student.php",
         type: "post",
         data: data,
         success: function(data){
              $("#st-ack").html(data).fadeIn().delay(1000).fadeOut();
              $("input[type=text]").val("");

               $("#s-s-show")
                .find("span")
                .remove()
                .end();

            showStudent();
         }
        });
    });


        $("#del").on("click", function(){
        
        var dat = $("#del-te").serialize();
        
        $.ajax({
        url: "./classes/del-teacher.php",
         type: "post",
         data: dat,
         success: function(data){
              $("#del-ack").html(data).fadeIn().delay(1000).fadeOut();

            $("#sel-to-del")
                .find("option")
                .remove()
                .end()
                .append("<option value='whatever'></option>")
                .val("whatever");

            showDel();

             $("#t-t-show")
                .find("tr")
                .remove()
                .end();

            tableShow();

         }
        });
    });

         $("#update").on("click", function(){
        
        var data = $("#fee-form").serialize();
        
        $.ajax({
        url: "./classes/update-fee.php",
         type: "post",
         data: data,
         success: function(data){
              $("#ack-fee").html(data).fadeIn().delay(1000).fadeOut();
              $("input[type=text]").val("");

         }
        });
    });

         

        
});