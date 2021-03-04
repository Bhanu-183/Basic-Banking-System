<?php
    $servername="localhost";
    $username="root";
    $pass="bhanu183";
    $conn=new mysqli($servername,$username,$pass);
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }  

    $q="CREATE DATABASE Bank_Server";
    if($conn->query($q)==TRUE)
        echo "Database Created";
    else
        echo "Error Creating Database:".$conn->error;
?>