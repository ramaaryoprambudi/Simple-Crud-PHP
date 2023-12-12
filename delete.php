<?php
    include('connection.php');
    $id = $_GET['data_karyawan'];
    $delete = mysqli_query($connection,"DELETE FROM karyawan WHERE id='$id'");

    if($delete){
        header('Location: index.php');
    }else{
        echo 'Delete Data Gagal';
    }
?>