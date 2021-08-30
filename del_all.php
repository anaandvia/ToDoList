<?php
// include database connection file
include 'koneksi.php';

    $sql = "DELETE FROM todo";
    $result = mysqli_query($koneksi,$sql );
        if($result){
            echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
        }else{  
            echo "<script>alert('Data gagal dihapus.');window.location='index.php';</script>";
        }
?>