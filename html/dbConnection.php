<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="sgp";

    $connect=mysqli_connect($host,$user,$pass,$db);

    if(!$connect)
    {
        die(mysqli_connect_error());
    }
?>