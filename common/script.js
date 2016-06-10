var main = function(){
    $(".description").hide();
    $(".button-collapse").sideNav();
    $("#name").keydown(function() {
    $(".description").slideDown('slow');
    });
    $('.clear').click(function() {
        confirm("Are you sure you want to clear the whole queue?");
        });
    $('.clear').click(function() {
        confirm("Are you sure you want to clear the whole queue?");
        });
        
/* DELETE STUFF
    $('i:contains(delete)').click(function() {
        var $listItem = $(this).parents().eq(2);
        $listItem.addClass('active');
        var id = $(this).parents().eq(1).val();
        var del = confirm("Are you sure you want to delete item: " + id + " ?");
        if (del === true){
            $listItem.hide();
        }
        else {
            $listItem.removeClass('active');
        }
    });
*/
}   
$(document).ready(main); 
  