<?php

                            include "koneksi.php";

                            if(isset($_POST['proses'])){
                                mysqli_query($koneksi, "UPDATE master_atasan set 
                                nama_atasan = '$_POST[nama_atasan]',
                                noreg_atasan = '$_POST[noreg_atasan]',
                                nip_atasan = '$_POST[nip_atasan]',
                                jabatan_atasan = '$_POST[jabatan_atasan]'
                                WHERE id_atasan = '$_POST[id_atasan]'");

                                echo "<script>alert('Data Atasan Anda Berhasil Diubah'); window.location ='tableatasan.php'</script>";
                            }
                            ?>