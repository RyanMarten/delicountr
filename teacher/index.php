<?php include_once "../common/header.php"; ?>

<body>
    <noscript>This site won't work without Java Script</noscript>
    <header>
        <nav>
            <div class="nav-wrapper red">
                <a href="/index.php" class="brand-logo title-header center">Delicountr</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <li class="active"><a href="/teacher/index.php">Serve</a></li>
                    <li><a href="/teacher/view.php">View</a></li>
                    <li>
                        <a class="waves-effect waves-red btn white clear">
                            <div class="red-color">Clear</div>
                        </a>
                    </li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li class="active"><a href="index.php">Serve</a></li>
                    <li><a href="view.php">View</a></li>
                    <li><a class="waves-effect waves-light btn red lighten-1 clear">Clear</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="valign-wrapper">
        <div class="container center-align">
            <?php 
            include_once "../inc/constants.inc.php";
            include_once "../inc/class.queue.inc.php";
            session_start();
            $myQueue = new Queue($db);
            $id = $_SESSION["serve"];
            $row =  $myQueue->loadTicketFromID($id);
            $id = $row['ticketID'];
            if(!(isset($id))){
                $topID= $myQueue->loadTicketFromTop();
                $_SESSION["serve"] = $topID;
                $row =  $myQueue->loadTicketFromID($topID); 
                $id = $row['ticketID'];
            }
            if(isset($id)){
                
                $name =  $row['ticketName'];
                $desc =  $row['ticketDesc'];
                echo '
                <div class="row">
                    <div class="col s12 m6  offset-m3">
                        <div class="card teal lighten-1">
                            <div class="card-content white-text">
                                <span class="card-title">#' . $id . ' </span>
                                <h5>Name: ' . $name . '</h5>
                                <br>
                                <p> Description: ' . $desc . ' </p>
                            </div>
                            <div class="card-action">
                                <a class="waves-effect waves-grey btn white">
                                    <div class="black-color">Done</div>
                                </a>
                            </div>
                        </div>
                    </div>';
            }
            else {
                echo '<h3> No Tickets! </h3>';
            }
            ?>
        </div>
        </div>


    </main>
</body>

<?php include_once "../common/footer.php"; ?>