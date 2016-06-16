var main = function() {
    setInterval(function() {
        $('.ticket').remove();
        $.ajax({
                type: 'POST',
                url: '../db-interaction/queues.php',
                data: {
                    action: 'update'
                }
            })
            .done(function(data) {
                $('#status').html("<i>Successful</i>");
                // show the response
                $('.queue').html(data);
            })
            .fail(function() {

            });
        // to prevent refreshing the whole page page
        return false;
    }, 60000); //60 seconds
    $(".description").hide();
    $(".button-collapse").sideNav();
    $("#name").keydown(function() {
        $(".description").slideDown('slow');
    });
    $('a[name="remove').click(function() {
        id = $(this).attr('value');
        //confirm('The id is ' + id); 
        $li = $(this).parent().parent();
        $('#status').html("<i>Completing Delete...</i>");
        $.ajax({
                type: 'POST',
                url: '../db-interaction/queues.php',
                data: {
                    action: 'remove',
                    id: id
                }
            })
            .done(function(data) {
                $('#status').html("<i>Successful</i>");
                $li.remove();



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