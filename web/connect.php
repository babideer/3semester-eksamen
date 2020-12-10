<?php
    //connect to database
    session_start();
    $conn = new mysqli("localhost", "root", "root", "logindb");
    if($conn->connect_error){
        echo "Failed to connect to MySQL: ".$conn->connect_error." (".$conn->connect_error.")";
        exit();
    }
    /*
    else{
        echo "connection succes";
    }*/
    //set character set to utf8
    $conn->set_charset("utf8");
?>