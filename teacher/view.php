<?php include_once "../common/header.php"; ?>

<body>
    <header>
        <nav>
            <div class="nav-wrapper red">
                <a href="/index.php" class="brand-logo title-header center">Delicountr</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="/teacher/index.php">Serve</a></li>
                    <li class="active"><a href="/teacher/view.php">View</a></li>
                    <li>
                        <a>
                        <form action=<?php echo  htmlspecialchars($_SERVER["PHP_SELF"])?> id="clear" method="post">
                        <button class="waves-effect waves-red btn white clear" name="clear">
                            <div class="red-color">Clear</div>
                        </button>
                        </form>
                        </a>
                    </li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="index.php">Serve</a></li>
                    <li class="active"><a href="view.php">View</a></li>
                    <li><a class="waves-effect waves-light btn red lighten-1 clear">Clear</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="row">
            <div class="col s12 center-align" id="status">
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l6 offset-l3">
        <!-- Can add dismissable class to li to make them swipable on mobile -->
        
        <ul class="collapsible popout" id="queue" data-collapsible="expandable">
             <?php
                include_once "../inc/class.queue.inc.php";
                $myQueue = new Queue;
                $myQueue->loadQueueTickets();
             ?>
        </ul>
        </div>
        </div>
    </main>
</body>

<?php include_once "../common/footer.php"; ?>