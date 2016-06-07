<?php include_once "../common/header.php"; ?>

<body>
    <header>
        <nav>
            <div class="nav-wrapper red">
                <a href="/index.php" class="brand-logo title center">Delicountr</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="/teacher/index.php">Serve</a></li>
                    <li><a href="/teacher/view.php">View</a></li>
                    <li class="active"><a href="/teacher/edit.php">Edit</a></li>
                    <li>
                        <a class="waves-effect waves-red btn white clear">
                            <div class="red-text">Clear</div>
                        </a>
                    </li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="view.php">Serve</a></li>
                    <li><a href="view.php">View</a></li>
                    <li class="active"><a href="edit.php">Edit</a></li>
                    <li><a class="waves-effect waves-light btn red lighten-1 clear">Clear</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        
    </main>
</body>

<?php include_once "../common/footer.php"; ?>