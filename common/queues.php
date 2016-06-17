<?php

include_once "class.queue.inc.php";
include_once "constants.inc.php";

$myQueue = new Queue($db);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    switch($_POST['action'])
    {
         case 'remove':
            $myQueue->removeTicketFromID($_POST['id']);
            header("Location: " . $_SERVER['REQUEST_URI']);
            exit();
            break;
       case 'update':
            $myQueue->loadQueueTickets();
            break;
        default:
            header("Location: /");
            break;
    }
}

    

?>