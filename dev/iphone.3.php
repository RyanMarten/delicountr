<!DOCTYPE html>
<html>
<!-- CURSOR POINTER!!!!! -->
<head>
  <!-- META -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS  -->
  <link rel="stylesheet" type="text/css" href="../styles/style.css">
  <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat'>
  <link rel="stylesheet" type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

  <!-- JS (for preformance boosting, can move to after body) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

  <!-- FAVICON // FONTS // ICONS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
   <script src="https://use.fontawesome.com/ba4f9520e8.js"></script>

  <!-- TITLE -->
  <title>Delicountr |
    <?php echo $pageTitle ?> </title>
<script>
var main = function() {
  $(document).on('click', '#button1',  function(event) {
    event.preventDefault();
    alert('button1');
  });
  
  setInterval(function() {
        $('.ticket').remove();
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
    
    $('a[name="remove').touch(function() {
        id = $(this).attr('value');
        //confirm('The id is ' + id); 
        $li = $(this).parent().parent();
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



            })
            .fail(function() {

                // just in case posting your form failed
             //   $('#status').html('<i>Failed</i>');

            });
        return false;
    });
    


}
$(document).ready(main);



</script>
<style>
  .button1 {
    cursor: pointer;
  }
</style>
</head>
<body>
<header>
    <nav>
      <div class="nav-wrapper red">
        <a href="#!" class="brand-logo title-header center">Delicountr</a>
      </div>
    </nav>
    </div>
  </header>
<body>
<main>
  <a class="button1" id="button1" href="#"><div class="icon"></div><div class="text">Option 1</div></a>
</main>
</body>

<?php 
include_once "../common/footer.php";
?>