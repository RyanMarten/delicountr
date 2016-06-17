<!DOCTYPE html>
<html>
<!-- TOUCHSTART -->
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
  <script src="../scripts/script.js"></script>

  <!-- FAVICON // FONTS // ICONS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
   <script src="https://use.fontawesome.com/ba4f9520e8.js"></script>

  <!-- TITLE -->
  <title>Delicountr |
    <?php echo $pageTitle ?> </title>
<script>
  $(document).ready(function () {
  init();
  $(document).click(function (e) {
    fire(e);
  });
});

function fire(e) { alert('hi'); }

function touchHandler(event)
{
    var touches = event.changedTouches,
        first = touches[0],
        type = "";

    switch(event.type)
    {
       case "touchstart": type = "mousedown"; break;
       case "touchmove":  type = "mousemove"; break;        
       case "touchend":   type = "mouseup"; break;
       default: return;
    }

    //initMouseEvent(type, canBubble, cancelable, view, clickCount, 
    //           screenX, screenY, clientX, clientY, ctrlKey, 
    //           altKey, shiftKey, metaKey, button, relatedTarget);

    var simulatedEvent = document.createEvent("MouseEvent");
    simulatedEvent.initMouseEvent(type, true, true, window, 1, 
                          first.screenX, first.screenY, 
                          first.clientX, first.clientY, false, 
                          false, false, false, 0/*left*/, null);

    first.target.dispatchEvent(simulatedEvent);
    event.preventDefault();
}

function init() 
{
    document.addEventListener("touchstart", touchHandler, true);
    document.addEventListener("touchmove", touchHandler, true);
    document.addEventListener("touchend", touchHandler, true);
    document.addEventListener("touchcancel", touchHandler, true);    
}
</script>
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
</main>
</body>

<?php 
include_once "../common/footer.php";
?>