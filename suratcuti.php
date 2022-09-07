<?php
include"koneksi.php";
require('./fpdf/fpdf.php');

function tanggal_indonesia($tanggal_rebag){
    $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
    );
    
    $pecahkan = explode('-', $tanggal_rebag);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
     
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
function terbilang($x){
    $abil=array("","(Satu)","(Dua)","(Tiga)","(Empat)","(Lima)","(Enam)","(Tujuh)","(Delapan)","(Sembilan)","(Sepuluh)","(Sebelas)");

    if($x<12) return " ".$abil[$x];
    elseif ($x<20) return terbilang ($x-10)." Belas";
}
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();


$pdf->SetFont('Arial','',12);
$pdf->Cell(8, 20, '', 0, '0','C');
$pdf->Cell(180,20,'',0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->Cell(8, 4, '', 0, '0','C');
$pdf->Cell(180,0,'Kepada',0,1,'L');

if(isset($_GET['id_pengajuancuti'])){
    $id_pengajuancuti=$_GET['id_pengajuancuti'];
}
else {
    die ("Error. No ID Selected!");    
}
$tampil  =mysqli_query($koneksi, "SELECT * FROM master_cuti INNER JOIN master_pegawai ON master_cuti.nama_pegawai = master_pegawai.id_pegawai
                                                            INNER JOIN master_atasan ON master_cuti.nama_atasan = master_atasan.id_atasan WHERE id_pengajuancuti='$id_pengajuancuti'");
$data    =mysqli_fetch_array($tampil);



$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(8, 4, '', 0, '0','C');
$pdf->Cell(180, 10, 'Yth. Pemimpin Kantor Cabang Bandung', 0, '0','L');
$pdf->Ln();

$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(8, 4, '', 0, '0','C');
$pdf->Cell(180, 0, 'Jl. Cipamokolan No. 1', 0, '0','L');
$pdf->Ln();

$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(8, 4, '', 0, '0','C');
$pdf->Cell(180, 10, 'Bandung', 0, '0','L');
$pdf->Ln();


$pdf->Ln();
$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(8, 4, '', 0, '0','C');
$pdf->Cell(180, 0, 'Dengan hormat,', 0, '0','L');
$pdf->Ln();

$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(8, 4, '', 0, '0','C');
$pdf->Cell(180, 10, 'Yang bertanda tangan di bawah ini :', 0, '0','L');
$pdf->Ln();

$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(8, 4, '', 0, '0','C');
$pdf->Cell(45, 10, 'Nama', 0, '0','L');
$pdf->Cell(5, 10, ':', 0, '0','L');
$pdf->Cell(10, 10, $data['nama_pegawai'], 0, '0','L');
$pdf->Ln();

$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(8, 4, '', 0, '0','C');
$pdf->Cell(45, 0, 'NIP/Noreg', 0, '0','L');
$pdf->Cell(5, 0, ':', 0, '0','L');
$pdf->Cell(135, 0, $data['nip']." / ".$data['no_reg'], 0, '0','L');
$pdf->Ln();

$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(8, 4, '', 0, '0','C');
$pdf->Cell(45, 10, 'Golongan', 0, '0','L');
$pdf->Cell(5, 10, ':', 0, '0','L');
$pdf->Cell(135, 10, $data['golongan'], 0, '0','L');
$pdf->Ln();

$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(8, 4, '', 0, '0','C');
$pdf->Cell(45, 0, 'Jabatan', 0, '0','L');
$pdf->Cell(5, 0, ':', 0, '0','L');
$pdf->Cell(135, 0, $data['jabatan'], 0, '0','L');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(8, 6, '', 0, '0','C');
$pdf->Cell(150, 6, '', 0, '0','L');
$pdf->Cell(30,6, '', 0, '0','L');


$pdf->Ln();
$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(8, 10, '', 0, '0','C');
$pdf->MultiCell(168, 5, 'Bersama ini saya bermaksud mengajukan permohonan cuti selama'.' '.$data['jumlah_hari'].terbilang($data['jumlah_hari']).' hari kerja'.' '.'terhitung pada tanggal'.' '.date('d-m-Y',strtotime($data['dari_tanggal'])).' '.'sampai dengan'.' '.date('d-m-Y',strtotime($data['sampai_tanggal'])).' '.', dikarenakan'.' '.$data['alasan_cuti'].'. '.'Demikian surat permohonan cuti ini disampaikan atas terkabulnya permohonan tersebut'.' saya ucapkan terima kasih.', 0, '0','L');
$pdf->Ln();


$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(15, 10, '', 0, '0','C', true);
$pdf->Cell(15, 10, '', 0, '0','C', true);
$pdf->Cell(35, 10, '', 0, '0','C', true);
$pdf->Cell(35, 10, '', 0, '0','C', true);
$pdf->Cell(35, 10, '', 0, '0','C', true);
$pdf->Cell(50, 10, '', 0, '0','C', true);
$pdf->Ln();

$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(8, 5, '', 0, '0','C', true);
$pdf->Cell(56, 5, '', 0, '0','C', true);
$pdf->Cell(56, 5, '', 0, '0','C', true);
$pdf->Cell(56, 5, 'Bandung, '.tanggal_indonesia($data['tanggal_pengajuancuti']), 0, '0','C', true);
$pdf->Ln();

$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(8, 4, '', 0, '0','C', true);
$pdf->Cell(72, 4, 'Mengetahui,', 0, '0','C', true);
$pdf->Cell(40, 4, '', 0, '0','C', true);
$pdf->Cell(56, 4, 'Hormat Saya, ', 0, '0','C', true);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B','12');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(8, 4, '', 0, '0','C', true);
$pdf->Cell(72, 4, $data['nama_atasan'], 0, '0','C', true);
$pdf->Cell(40, 4, '', 0, '0','C', true);
$pdf->Cell(56, 4, $data['nama_pegawai'] , 0, '0','C', true);
$pdf->Ln();

$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(8, 4, '', 0, '0','C', true);
$pdf->Cell(72, 4, $data['jabatan_atasan'], 0, '0','C', true);
$pdf->Cell(40, 4, '', 0, '0','C', true);
$pdf->Cell(56, 4, 'Pemohon', 0, '0','C', true);
$pdf->Ln();
$pdf->Ln();
$pdf->Output();


?>