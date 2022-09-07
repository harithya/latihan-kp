<?php
 
    $conn = new mysqli("localhost","root","","prov_kota");
 
    $id_prov = $_GET[‘id’];
 
?>
 
<select name="kota" class="input">
 
    <option value="">-= Pilih Kota/Kabupaten =-</option>
 
    <?php
 
        $sql_kota = $conn->query("SELECT * FROM kabkot WHERE id_prov=’$id_prov’ ORDER by nama_kabkot ASC");
 
    while ( $r = $sql_kota->fetch_object() ){ ?>
 
        <option value="<?php echo $r->id_kabkot ?>"> <?php echo $r->nama_kabkot ?></option>
 
    <?php } /* end while */ ?>
 
</select>