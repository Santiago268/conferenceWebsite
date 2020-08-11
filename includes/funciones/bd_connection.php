<?php
    $conn = new mysqli('localhost', 'root', '260898s', 'conferencewebsite');

    if($conn->connect_error){
       echo $error-> $conn->connect_error;
    }
?>