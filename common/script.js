var main = function(){
    $(".description").hide();
    $(".button-collapse").sideNav();
    $("#name").keydown(function() {
        $(".description").slideDown('slow');
    });
   
   
}   
$(document).ready(main); 
  