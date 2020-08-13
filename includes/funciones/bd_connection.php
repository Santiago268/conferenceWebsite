<?php
    $conn = new mysqli('localhost', 'root', 'root', 'conferencewebsite');

    if($conn->connect_error){
       echo $error-> $conn->connect_error;
    }
?>
