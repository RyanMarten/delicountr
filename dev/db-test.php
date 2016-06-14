<?php 
include_once "../common/header.php";
?>
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
    <h1>Using mysqli</h1>
    <?php include_once "mysqli-connect.php" ?>
    
    <h1>Using PDO</h1>
    <?php include_once "pdo-connect.php" ?>
</main>
</body>

<?php 
include_once "../common/footer.php";
?>