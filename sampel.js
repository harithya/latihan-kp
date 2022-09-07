$(document).ready(function(){
    //variabel global
    var no=0;
    //fungsi mengkonfersi Nan ke 0
    function getNum(val){
        if (isNaN(val)){
            return 0;
            }
            return val;
    }

    //Fungsi untuk clear value pada setiap inputan
    function kosong(){
        $("#nama_produk").prop("");
        $("#kemasan_sampel").prop("");
        $("#koli_sampel").val("0");
        $("#kuantum_sampel").val("0");
    }

    //Membuat fungsi untuk menghitung kuantum
    function hitung_kuantum(){
        var kemasan_sampel = parseInt($("#kemasan_sampel").val());
        var koli_sampel = parseInt($("#koli_sampel").val());
        kuantum_sampel=kemasan_sampel*koli_sampel;

        $("#kuantum_sampel").val(getNum(kuantum_sampel));
    }

    //pada saat klik tombol tambah maka akan memanggil fungsi kosong
    $("#baru").click(function(){
        kosong();
    });

    //Pada saat klik tombol tambah maka data pada inputan akan ditambahkan pada tabel
    $("#tambah").click(function(){
        var nama_produk=$("#nama_produk").val();
        var kemasan_sampel=$("#kemasan_sampel").val();
        var koli_sampel=$("#koli_sampel").val();
        var kuantum_sampel=$("#kuantum_sampel").val();

        //Pada saat klik tambah maka semua inputan akan dicek apakah masih kosong atau tidak
        if(nama_produk=="" || kemasan_sampel=="" || koli_sampel=="" || kuantum_sampel==""){
            alert("Isi data dengan lengkap");

        }else{

            //Menambahkan data dengan fungsi append
            no++;

            $("#datasampel").append("<tr><td>"+no+"<td>"+nama_produk+"<td>"+kemasan_sampel+" kg"+"<td>"+koli_sampel+"<td>"+kuantum_sampel);
           
             }

    });

     
});