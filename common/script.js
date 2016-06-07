var main = function(){
    $("#description").hide();
    $('label[for="description"]').hide();
    $(".button-collapse").sideNav();
    $("#name").keydown(function() {
        $('label[for="description"]').fadeTo(5000, 1);
        $("#description").fadeTo(5000, 1)
    });
} 
$(document).ready(main); 
  