<?php
include('../../configurasi/config.php');
$idklp              = $_GET['idklp'];
$idpemilik          = $_GET['idang'];
$jenis_komoditas    = $_GET['jenis_komoditas'];
$jumlah_komoditas   = $_GET['jumlah_komoditas'];

echo "id_kelompok = ",$idklp, "<br>";

$stampwaktu = date('Ymdhis', time());
echo "id_komoditas = ",$stampwaktu,"<br></br>";

//$intjeniskomoditas = (int)$jenis_komoditas;

$perintah = "INSERT INTO tb_komoditas (id_komoditas,id_pemilik,id_kelompok,jenis_komoditas,jumlah_komoditas) VALUES('$stampwaktu','$idpemilik','$idklp','$jenis_komoditas','$jumlah_komoditas')";
echo $perintah;
$query = mysqli_query($koneksi,$perintah);
$lokasi = "Location: ../index.php?page=list-komoditas&&idklp=".$idklp."&&idang=".$idpemilik;
echo $lokasi;
header($lokasi);

?>