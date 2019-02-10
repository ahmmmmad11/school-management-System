$(function(){

     if (window.location.hash == "#te-reg") {
       $(".t-reg").fadeIn();
       $(".c-fee").fadeOut();
       $(".t-show").fadeOut();
       footer();
    }
    if (window.location.hash == "#te-sho") {
       $(".t-show").fadeIn();
        $(".t-reg").fadeOut();
        $(".t-reg").fadeOut();
        footer();
    }
    if (window.location.hash == "#c-fee") {
       $(".c-fee").fadeIn();
        $(".t-show").fadeOut();
         $(".t-reg").fadeOut();
         footer();
    }

    $("#secs").on("click", function(){
        $(".t-reg").fadeOut();
        $(".t-show").fadeOut();
        $(".c-fee").fadeOut();
        $(".t-sec").fadeIn();
        footer();
        
    });
     $("#show").on("click", function(){
       $(".t-sec").fadeOut();
         $(".t-reg").fadeOut();
         $(".c-fee").fadeOut();
         $(".t-show").fadeIn();
         footer();
    });
     $("#reg").on("click", function(){
        $(".t-sec").fadeOut();
        $(".t-show").fadeOut();
        $(".c-fee").fadeOut();
         $(".t-reg").fadeIn();
         footer(); 
       
    });
     $("#c-fee").on("click", function(){
       $(".t-sec").fadeOut();
        $(".t-show").fadeOut();
         $(".t-reg").fadeOut();
         $(".c-fee").fadeIn();
         footer();
    });
    $("#cancil").on("clic",function(){
        $(this).preventDefault();
    });
});