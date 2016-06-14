<?php 
    include_once "../inc/constants.inc.php";
  
    try {
        $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
        $db = new PDO($dsn, DB_USER, DB_PASS);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit;
    }
    
        $sql = "SELECT * FROM tickets";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch())
            {
            echo "<p>The ticket ID is" . $row['ticketID'] . " and the ticket name is: " . $row['ticketName'] . " and the ticket description is: " . $row['ticketDesc']."</p>";
            }
            $stmt->closeCursor();

    ?>