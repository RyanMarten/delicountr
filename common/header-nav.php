<!DOCTYPE html>
<html>

<head>
    <!-- META -->
    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS  -->
    <link rel="stylesheet" type="text/css" href="../common/style.css">
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat' >
    <link rel="stylesheet" type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
	<script src="../common/script.js"></script>
    
    <!-- FAVICON // FONTS // ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
	
	<!-- TITLE -->
    <title>Delicountr |  <?php echo $pageTitle ?> </title>
    
</head>
<body>
    <noscript>This site won't work without Java Script</noscript>
    <header>
    <nav>
    <div class="nav-wrapper red darken-4">
      <a href="/index.php" class="brand-logo title center">Delicountr</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="left hide-on-med-and-down">
        <li><a href="view.php">Serve</a></li>
        <li><a href="view.php">View</a></li>
        <li><a href="edit.php">Edit</a></li>
        <li><a class="waves-effect waves-light btn red lighten-1">Clear</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="view.php">Serve</a></li>
        <li><a href="view.php">View</a></li>
        <li><a href="edit.php">Edit</a></li>
        <li><a class="waves-effect waves-light btn red lighten-1">Clear</a></li>
      </ul>
    </div>
  </nav>
        
  </div>
        
    </header>
    <div class="container">
    <!-- Add basic page divs (remember to close the divs and body in the footer.php) -->