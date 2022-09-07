<?php

                            include "koneksi.php";

                            if(isset($_POST['proses'])){
                                mysqli_query($koneksi, "UPDATE master_pegawai set 
                                nama_pegawai = '$_POST[nama_pegawai]',
                                no_reg = '$_POST[no_reg]',
                                nip = '$_POST[nip]',
                                golongan = '$_POST[golongan]',
                                jabatan = '$_POST[jabatan]',
                                jumlah_cuti = '$_POST[jumlah_cuti]',
                                cuti_terpakai = '$_POST[cuti_terpakai]',
                                sisa_cuti = '$_POST[sisa_cuti]'
                                WHERE id_pegawai = '$_POST[id_pegawai]'");

                                echo "<script>alert('Data Pegawai Berhasil Diubah'); window.location ='tablepegawai.php'</script>";
                            }
                            ?>