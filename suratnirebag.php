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


$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
if(isset($_GET['id_rebag'])){
    $id_rebag=$_GET['id_rebag'];
}
else {
    die ("Error. No ID Selected!");    
}
$tampil  =mysqli_query($koneksi, "SELECT * FROM master_nirebag INNER JOIN master_produk ON master_nirebag.nama_produk = master_produk.id_produk
                                                               INNER JOIN master_bahan ON master_nirebag.bahan_rebag = master_bahan.id_bahan 
                                                               INNER JOIN master_atasan ON master_nirebag.nama_atasan = master_atasan.id_atasan
                                                               WHERE id_rebag='$id_rebag'");
$data    =mysqli_fetch_array($tampil);

$pdf->SetFont('Arial','BU',16);
$pdf->Cell(188,0,'NOTA - INTERN',0,1,'C');

$pdf->SetFont('Arial','',12);
$pdf->Cell(188,10,'Nomor : NI - '.$data['no_ni'].'/10A03/'.date('m',strtotime($data['tanggal_rebag'])).'/'.date('Y',strtotime($data['tanggal_rebag'])),0,1,'C');

$pdf->SetFont('Arial','',12);
$pdf->Cell(188,5,'',0,1,'C');

$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(40, 5, '', 0, '0','L');
$pdf->Cell(30, 5, 'Kepada', 0, '0','L');
$pdf->Cell(3, 5, ':', 0, '0','L');
$pdf->Cell(9, 5, 'Yth. ', 0, '0','L');
$pdf->SetFont('Arial','B','12');
$pdf->Cell(111, 5, 'Pinca / Wapinca Kancab Bandung', 0, '0','L');
$pdf->Ln();

$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(40, 5, '', 0, '0','L');
$pdf->Cell(30, 5, 'Dari', 0, '0','L');
$pdf->Cell(3, 5, ':', 0, '0','L');
$pdf->Cell(120, 5,$data['jabatan_atasan'], 0, '0','L');
$pdf->Ln();

$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(40, 5, '', 0, '0','L');
$pdf->Cell(30, 5, 'Perihal', 0, '0','L');
$pdf->Cell(3, 5, ':', 0, '0','L');
$pdf->Cell(35, 5, 'Permohonan SPK', 0, '0','L');
$pdf->SetFont('Arial','I','12');
$pdf->Cell(22, 5, 'Rebagging', 0, '0','L');
$pdf->SetFont('Arial','','12');
$pdf->Cell(78, 5, $data['jenis_produk'], 0, '0','L');
$pdf->Ln();

$pdf->SetLineWidth(0.5);
$pdf->Line(20,45,192,45);
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(9, 5, '', 0, '0','L');
$pdf->MultiCell(178, 6, 'Untuk mendukung kelancaran kegiatan penjualan komoditi '.$data['jenis_produk'].' bersama ini kami mengajukan permohonan izin pelaksanaan Rebagging '.$data['jenis_produk'].' di '.$data['gudang_rebag'].' dengan rincian sebagai berikut :', 0, '0','L');
$pdf->Ln();

$pdf->SetFont('Arial','B','9');
$pdf->SetFillColor(200,200,200);
$pdf->SetTextColor(0,0,0);
$pdf->SetDrawColor(0,0,0);
$pdf->Cell(10, 12, '', 0, '0','C');
$pdf->Cell(8, 12, 'No', 1, '0','C',true);
$pdf->Cell(67, 12, 'Rebag', 1, '0','C',true);
$pdf->Cell(16, 12, 'Koli', 1, '0','C',true);
$pdf->Cell(16, 12, 'Kuantum', 1, '0','C',true);
$pdf->Cell(32, 12, 'Bahan', 1, '0','C',true);
$pdf->Cell(36, 6, 'Kemasan', 1, '0','C',true);
$pdf->Ln();

$pdf->SetFont('Arial','B','9');
$pdf->SetFillColor(200,200,200);
$pdf->SetTextColor(0,0,0);
$pdf->SetDrawColor(0,0,0);
$pdf->Cell(10, 0, '', 0, '0','C');
$pdf->Cell(8, 0, '', 0, '0','C');
$pdf->Cell(67, 0, '', 0, '0','C');
$pdf->Cell(16, 6, '(pcs)', 0, '0','C');
$pdf->Cell(16, 6, '(kg)', 0, '0','C');
$pdf->Cell(32, 0, '', 0, '0','C');
$pdf->Cell(18, 6, 'Sebelum', 1, '0','C',true);
$pdf->Cell(18, 6, 'Sesudah', 1, '0','C',true);
$pdf->Ln();

$pdf->SetFont('Arial','','9');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetDrawColor(0,0,0);
$pdf->Cell(10, 0, '', 0, '0','C');
$pdf->Cell(8, 12, '1', 1, '0','C');
$pdf->Cell(67, 12, $data['nama_produk'], 1, '0','L');
$pdf->Cell(16, 12, $data['koli_rebag'], 1, '0','C');
$pdf->Cell(16, 12, $data['kuantum_rebag'], 1, '0','C');
$pdf->Cell(32, 12, $data['nama_bahan'], 1, '0','C');
$pdf->Cell(18, 12, $data['kemasansebelum_rebag'].'kg', 1, '0','C');
$pdf->Cell(18, 12, $data['kemasansesudah_rebag'].'kg', 1, '0','C');
$pdf->Ln();

$pdf->SetFont('Arial','B','9');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetDrawColor(0,0,0);
$pdf->Cell(10, 0, '', 0, '0','C');
$pdf->Cell(75, 6, 'Jumlah', 1, '0','C');
$pdf->Cell(16, 6, $data['koli_rebag'], 1, '0','C');
$pdf->Cell(16, 6, $data['kuantum_rebag'], 1, '0','C');
$pdf->Cell(68, 6, '', 1, '0','C');
$pdf->Ln();

$pdf->Ln();
$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(9, 5, '', 0, '0','L');
$pdf->MultiCell(178, 6, 'Demikian disampaikan, mohon persetujuan lebih lanjut.', 0, '0','L');
$pdf->Ln();

$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetDrawColor(0,0,0);
$pdf->Cell(10, 0, '', 0, '0','C');
$pdf->Cell(54, 6, '', 0, '0','C');
$pdf->Cell(55, 6, '', 0, '0','C');
$pdf->Cell(66, 6, 'Bandung, '.tanggal_indonesia($data['tanggal_rebag']), 0, '0','L');
$pdf->Ln();

$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B','12');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetDrawColor(0,0,0);
$pdf->Cell(10, 0, '', 0, '0','C');
$pdf->Cell(54, 6, '', 0, '0','C');
$pdf->Cell(55, 6, '', 0, '0','C');
$pdf->Cell(66, 6, $data['nama_atasan'], 0, '0','L');
$pdf->Ln();

$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetDrawColor(0,0,0);
$pdf->Cell(10, 3, '', 0, '0','C');
$pdf->Cell(54, 3, '', 0, '0','C');
$pdf->Cell(55, 3, '', 0, '0','C');
$pdf->Cell(66,3, $data['jabatan_atasan'],0, '0','L');
$pdf->Ln();

$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','U','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(9, 5, '', 0, '0','L');
$pdf->MultiCell(178, 6, 'Tembusan:', 0, '0','L');


$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(9, 5, '', 0, '0','L');
$pdf->MultiCell(178, 6, '-   Kasi OPP', 0, '0','L');


$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(9, 5, '', 0, '0','L');
$pdf->MultiCell(178, 4, '-   Arsip', 0, '0','L');
$pdf->Ln();
$pdf->Output();
?>