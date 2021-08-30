<?php
// include database connection file
include 'koneksi.php';

    $judul = $_POST['judul'];
    $sql = "INSERT INTO todo VALUES ('','$judul')";
    $result = mysqli_query($koneksi,$sql );
        if($result){
            echo "<script>alert('Data berhasil disimpan.');window.location='index.php';</script>";
        }else{  
            echo "<script>alert('Data gagal disimpan.');window.location='index.php';</script>";
        }
?>