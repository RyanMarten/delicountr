<?php

include_once "inc/class.queue.inc.php";
include_once "inc/constants.inc.php";

 
if(!empty($_POST['action'])) {
    $queue = new Queue($db);
    switch($_POST['action'])
    {
        case 'remove':
            $queue->removeTicketFromID($_POST['id']);
            break;
        default:
            header("Location: /");
            break;
    }
}
else
{
    header("Location: /");
    exit;
}


    include_once "inc/constants.inc.php";
    include_once "inc/class.queue.inc.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $myQueue = new Queue($db);
            $id = $myQueue->addTicket();
            $_SESSION["ticket"] = $id;
        }
?>