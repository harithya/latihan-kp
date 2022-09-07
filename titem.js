$(document).ready(function(){
    //variabel global
    var no=0;
    //fungsi mengkonversi Nan ke 0
    function getNum(val) {
        if (isNaN(val)) {
            return 0;
            }
            return val;
    }

    //Fungsi untuk clear value pada setiap lanjutan
    function kosong() {
        $("#kategori").prop("selected",false);
        $("#id_produk").prop("selected",false);
        $("#harga_jual").val("0");
        $("#jmlbarang").val("0");
        $("#subtotal").val("0");
    }

   //Pada saat klik tombol tambahkan item maka akan memanggil fungsi kosong
   $("#tambahitem").click(function() {
       kosong();
   });

   //pada saat klik tombol simpan maka data pada inputan akan ditambahkan pada tabel
   $("#mdlsimpan").click(function() {
       var produk= $("#id_produk").val();
       var kategori= $("#kategori").val();
       var qbarang= $("#jmlbarang").val();
       var harga= $("#harga_jual").val();
       var subtot= $("#subtotal").val();

       if(kategori=="" || produk=="" || harga=="" || qbarang==""  || subtot=="") {
           alert("Isi data dengan lengkap");
       }else{

        // Menambahkan data dengan fungsi append
        no++;

        $("#dataitem").append("<tr><td>"+no+"</td><td>"+kategori+"</td><td>"+produk+"</td><td>"+harga+"</td><td>"+qbarang+"</td><td>"+subtot+"</td></tr>");
        alert("Data berhasil ditambahkan"); window.location ='transaksi_penjualancopy.php';
        
        }
   });

       
});