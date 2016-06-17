var main = function() {
     $(document).on('click', 'a[name="remove"]',  function(event) {
    event.preventDefault();
    id = $(this).attr('value');
        //confirm('The id is ' + id); 
        $li = $(this).parent().parent().parent();
        //$('#status').html("<i>Completing Delete...</i>");
        $.ajax({
                type: 'POST',
                url: '../common/queues.php',
                data: {
                    action: 'remove',
                    id: id
                }
            })
            .done(function(data) {
               // $('#status').html("<i>Successful</i>");
                $li.remove();
                Materialize.toast('Delete Successful', 2000) // 4000 is the duration of the toast


            })
            .fail(function() {
                Materialize.toast('Delete Failed', 2000) // 4000 is the duration of the toast
            });
        return false;
  });
    
    setInterval(function() {
        $('.ticket').hide();
        $.ajax({
                type: 'POST',
                url: '../common/queues.php',
                data: {
                    action: 'update'
                }
            })
            .done(function(data) {
               // $('#status').html("<i>Successful</i>");
                // show the response
                $('.ticket').remove();
                $('.queue').html(data);
            })
            .fail(function() {
                $('.ticket').hide();
                Materialize.toast('Refresh Failed', 2000) 
            });
        // to prevent refreshing the whole page page
        return false;
    }, 60000); //60 seconds
    $(".description").hide();
    $(".button-collapse").sideNav();
    $("#name").keydown(function() {
        $(".description").slideDown('slow');
    });

    


}
$(document).ready(main);