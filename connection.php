<?php
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbName = "karyawan";

    $connection = mysqli_connect($serverName, $username, $password, $dbName);

    if(!$connection){
    die. "Could not connect to server mysql";
}
?>