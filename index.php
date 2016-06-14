<?php include_once "common/header.php"; ?>
<noscript>This site won't work without Java Script</noscript>
<header>
    <nav>
        <div class="nav-wrapper red">
            <a href="#!" class="brand-logo title-header center">Delicountr</a>
        </div>
    </nav>
    </div>
</header>

<main class="valign-wrapper">
    <div class="container center-align">
        <?php 
            session_start();
            include_once "inc/constants.inc.php";
            include_once "inc/class.queue.inc.php";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $myQueue = new Queue($db);
                $id = $myQueue->addTicket();
                $_SESSION["ticket"] = $id;
            }
            if(isset($_SESSION['ticket'])){
                $myQueue = new Queue($db);
                //PUT IF STATEMENT TO DETERMINE WHETHER THE TICKET HAS BEEN COMPLETED OR NOT.... 
                $row =  $myQueue->loadTicketFromSession();
                $name =  $row['ticketName'];
                $desc =  $row['ticketDesc'];
                echo '
                <div class="row">
                <h3> Your Ticket </h3>
                <div class="col s12 m6  offset-m3">
                    <div class="card teal lighten-1">
                        <div class="card-content white-text">
                            <span class="card-title">#' . $id .'</span>
                            <h5>Name: ' . $name .'</h5>
                            <br>
                            <p> Description: ' . $desc . ' </p>
                        </div>
                        <div class="card-action">
                            <a class="waves-effect waves-red btn white">
                                <div class="red-color">Remove</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            ';
            }
            else { echo '
            <div class="row">
                <div class="col m4 offset-m4 l2 offset-l5 s6 offset-s3">
                    <img class="responsive-img" src="images/ticket-600x600.png" alt="delicountr logo" />
                </div>
            </div>
            <div class="row">
                <form class="col s12" action="' .  htmlspecialchars($_SERVER["PHP_SELF"]) . '"id="add" method="post">
                    <div class="row">
                        <div class="input-field col s10 offset-s1 m8 offset-m2 l6 offset-l3">
                            <input id="name" type="text" name="name">
                            <label for="name">Name</label>
                        </div>
                    </div>
                    <div class="row description">
                        <div class="input-field col s10 offset-s1 m8 offset-m2  l6 offset-l3">
                            <textarea id="description" class="materialize-textarea" length="150" name="description"></textarea>
                            <label for="description">Description</label>
                        </div>
                    </div>
                      <div class="row">
                 <button id="add-submit" class="col m8 offset-m2 s10 offset-s1 l6 offset-l3 waves-effect waves-light btn-large" type="submit">
                    take a ticket
                </button>
            </div>
                </form>';
            }
        ?>
    </div>
    </div>
</main>

<?php include_once "common/footer.php"; ?>