<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "phpproject";
    $conn = mysqli_connect($servername,$username,$password,$db);
    mysqli_set_charset($conn,"utf8");
?>