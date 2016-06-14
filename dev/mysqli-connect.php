<?php
    
    //Connect to the database
    $host = "127.0.0.1";
    $user = "root";                              //By default --> Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "dc_db";                               //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());



    //And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM tickets";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p> The ticket ID is" . $row['ticketID'] . " and the ticket name is: " . $row['ticketName'] . " and the ticket description is: " . $row['ticketDesc']. "</p>";
    }

?>