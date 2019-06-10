<?php
    $host     = "localhost"; //umumnya menggunakan localhost
    $username = "root";
    $pass     = "";
    $db       = "ehe";

    // mysql_connect($host, $username, $pass);
    $con=mysqli_connect($host, $username, $pass,$db);
    // mysqli_select_db($con,$db);
?>
