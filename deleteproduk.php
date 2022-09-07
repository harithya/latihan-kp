<?php
include "koneksi.php";
    $delete=mysqli_query($koneksi,"DELETE FROM master_produk WHERE id_produk='$_GET[id_produk]'");
    if($delete) {
        header("location:tableproduk.php");
        }else{
            echo"Gagal Menghapus";
        }
?>