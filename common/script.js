var main = function(){
    $(".description").hide();
 //   $("#description").hide();
  //  $('label[for="description"]').hide();
    $(".button-collapse").sideNav();
    $("#name").keydown(function() {
        $(".description").slideDown('slow');
        //$('label[for="description"]').show();
        //$("#description").show();
    });
} 
$(document).ready(main); 
  