<?php
include "koneksi.php";
    $delete=mysqli_query($koneksi,"DELETE FROM master_atasan WHERE id_atasan='$_GET[id_atasan]'");
    if($delete) {
        header("location:tableatasan.php");
        }else{
            echo"Gagal Menghapus";
        }
?>