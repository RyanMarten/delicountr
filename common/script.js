var main = function(){
    $(".description").hide();
    $(".button-collapse").sideNav();
    $("#name").keydown(function() {
    $(".description").slideDown('slow');
    });
    $('.clear').click(function() {
        confirm("Are you sure you want to clear the whole queue?");
        });
} 
$(document).ready(main); 
  