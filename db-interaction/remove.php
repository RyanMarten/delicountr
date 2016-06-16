<?php

include_once "../inc/class.queue.inc.php";
include_once "../inc/constants.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $myQueue = new Queue($db);
               /* echo 'TEST';
                echo "<pre>";
                print_r($_POST);
                echo "</pre>"; */
                if($_POST['action']=='remove'){
                    $myQueue->removeTicketFromID($_POST['id']);
                    $myQueue->loadQueueTickets();
                }
            }

?>