<?php
include "koneksi.php";
    $delete=mysqli_query($koneksi,"DELETE FROM master_nirebag WHERE id_rebag='$_GET[id_rebag]'");
    if($delete) {
        header("location:tablenirebag.php");
        }else{
            echo"Gagal Menghapus";
        }
?>