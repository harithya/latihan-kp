<?php
include "koneksi.php";
    $delete=mysqli_query($koneksi,"DELETE FROM master_bahan WHERE id_bahan='$_GET[id_bahan]'");
    if($delete) {
        header("location:tablebahan.php");
        }else{
            echo"Gagal Menghapus";
        }
?>