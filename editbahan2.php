<?php

                            include "koneksi.php";

                            if(isset($_POST['proses'])){
                                mysqli_query($koneksi, "UPDATE master_bahan set 
                                jenis_bahan = '$_POST[jenis_bahan]',
                                nama_bahan = '$_POST[nama_bahan]'
                                WHERE id_bahan = '$_POST[id_bahan]'");

                                echo "<script>alert('Data Produk Berhasil Diubah'); window.location ='tablebahan.php'</script>";
                            }
                            ?>