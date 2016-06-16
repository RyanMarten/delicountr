var main = function(){
    $(".description").hide();
    $(".button-collapse").sideNav();
    $("#name").keydown(function() {
        $(".description").slideDown('slow');
    });
    $('a[name="remove').click(function(){
        $id = $(this).attr('value');
        confirm('The id is ' + $id); 
        $('#status').html("<i>Completing Delete...</i>");
        /*
         * 'post_receiver.php' - where you will pass the form data
         * $(this).serialize() - to easily read form data
         * function(data){... - data contains the response from post_receiver.php
         */
        $.ajax({
            type: 'POST',
            url: '../db-interaction/remove.php', 
            data: "{'id' : " + $id + ", 'action' : 'remove'}"
        })
        .done(function(data){
             
            // show the response
            $('#status').html('<i>Successful: ' + data + '</i>');
             
        })
        .fail(function() {
         
            // just in case posting your form failed
            $('#status').html('<i>Failed</i>');
             
        });
 
        // to prevent refreshing the whole page page
        return false;
    });
        
 

}   
$(document).ready(main); 