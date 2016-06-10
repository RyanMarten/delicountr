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
                        <a class="waves-effect waves-red btn white clear">
                            <div class="red-color">Clear</div>
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
            <div class="col s12 m12 l6 offset-l3">
        <!-- Can add dismissable class to li to make them swipable on mobile -->
        <ul class="collapsible popout" data-collapsible="expandable">
             <li>
                <div class="collapsible-header"><b>#315</b> Ryan Marten<a href="#!" class="secondary-content"><i class="material-icons red-color">delete</i></a></div>
                <div class="collapsible-body">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><b>#316</b> Andrew Cabey<a href="#!" class="secondary-content"><i class="material-icons red-color">delete</i></a></div>
                <div class="collapsible-body">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><b>#317</b> Jeremy Brown<a href="#!" class="secondary-content"><i class="material-icons red-color">delete</i></a></div>
                <div class="collapsible-body">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </li>
            <li>
                <div class="collapsible-header"><b>#318</b> Brandon Guo<a href="#!" class="secondary-content"><i class="material-icons red-color">delete</i></a></div>
                <div class="collapsible-body">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </li>
        </ul>
        </div>
        </div>
    </main>
</body>

<?php include_once "../common/footer.php"; ?>