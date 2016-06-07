<?php include_once "../common/header.php"; ?>

<body>
    <noscript>This site won't work without Java Script</noscript>
    <header>
        <nav>
            <div class="nav-wrapper red">
                <a href="/index.php" class="brand-logo title center">Delicountr</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <li class="active"><a href="/teacher/index.php">Serve</a></li>
                    <li><a href="/teacher/view.php">View</a></li>
                    <li><a href="/teacher/edit.php">Edit</a></li>
                    <li>
                        <a class="waves-effect waves-red btn white clear">
                            <div class="red-text">Clear</div>
                        </a>
                    </li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li class="active"><a href="view.php">Serve</a></li>
                    <li><a href="view.php">View</a></li>
                    <li><a href="edit.php">Edit</a></li>
                    <li><a class="waves-effect waves-light btn red lighten-1 clear">Clear</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="valign-wrapper">
        <noscript>This site won't update without Java Script</noscript>
        <div class="container center-align">
        <div class="row">
        <div class="col s12 m6  offset-m3">
          <div class="card teal lighten-1">
            <div class="card-content white-text">
              <span class="card-title">#314</span>
              <p>Name: Ryan Marten</p>
              <br>
              <p> Description: I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively. </p>
            </div>
            <div class="card-action">
              <a class="waves-effect waves-red btn white">
                            <div class="red-text">Done</div>
              </a>
            </div>
          </div>
        </div>
      </div>
        
        
    </main>
</body>

<?php include_once "../common/footer.php"; ?>