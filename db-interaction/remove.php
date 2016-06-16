<?php

include_once "../inc/class.queue.inc.php";
include_once "../inc/constants.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo 'TEST';
                echo "<pre>";
                print_r($_POST);
                echo "</pre>";
                if($_POST['action']=='remove'){
                    echo "HELLO!";
                    $myQueue->removeTicketFromID($_POST['id']);
                }
            }

?>