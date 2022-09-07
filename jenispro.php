<?php

require_once "koneksi.php";

$id_jenisproduk = $_POST['id_jenisproduk'];

$sql_bimum= mysqli_query($koneksi, "SELECT * FROM master_jenisproduk where id_jenisproduk=$id_jenisproduk");

       while ($row_bimum = mysqli_fetch_array($sql_bimum)) {
        echo '<label value="'.$row_bimum['biaya_umum'].'">';
    }

