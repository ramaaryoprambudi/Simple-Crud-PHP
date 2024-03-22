<?php
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbName = "karyawan";

    $connection = mysqli_connect($serverName, $username, $password, $dbName);

    function query($query){
        global $connection;
        $results = mysqli_query($connection, $query);
        $rows = mysqli_fetch_all($results,MYSQLI_ASSOC);
        return $rows;
    }

    function search ($search){
        global $connection;
        $query = mysqli_query($connection,$search);
        $rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
        return $rows;
    }
    
    function edit ($edit){
        global $connection;
        $query = mysqli_query($connection,$edit);
        $rows = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $rows;
    }
    
?>