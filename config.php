<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "starwar";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("Connect Failed: " . mysqli_connect_error());
    }else{
        // echo "Connect Succes";
    }
?>