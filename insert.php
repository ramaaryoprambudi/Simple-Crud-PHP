<?php
include("connection.php");

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$insert = mysqli_query($connection , "INSERT INTO karyawan SET nama='$nama',alamat='$alamat',umur='$umur',Jenis_Kelamin='$jenis_kelamin' ");

if($insert){
    header("Location:index.php");
}else{
    echo "Tambah Data Gagal";
}
?>