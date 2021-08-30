<?php
// include database connection file
include 'koneksi.php';
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    } else {
    die ("Error. No ID Selected!");    
    }

    $sql = "DELETE FROM todo WHERE id ='$id'";
    $result = mysqli_query($koneksi,$sql );
        if($result){
            echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
        }else{  
            echo "<script>alert('Data gagal dihapus.');window.location='index.php';</script>";
        }
?>