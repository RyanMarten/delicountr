<?php

include_once "../inc/class.queue.inc.php";
include_once "../inc/constants.inc.php";

$myQueue = new Queue($db);
/* echo 'TEST';
echo "<pre>";
print_r($_POST);
echo "</pre>"; */
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