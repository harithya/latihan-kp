<?php

                            include "koneksi.php";

                            if(isset($_POST['proses'])){
                                mysqli_query($koneksi, "UPDATE master_produk set 
                                jenis_produk = '$_POST[jenis_produk]',
                                nama_produk = '$_POST[nama_produk]'
                                WHERE id_produk = '$_POST[id_produk]'");

                                echo "<script>alert('Data Produk Berhasil Diubah'); window.location ='tableproduk.php'</script>";
                            }
                            ?>