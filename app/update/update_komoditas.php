<?php
include('../../configurasi/config.php');
$idklp             = $_GET['idklp'];
$idang             = $_GET['idang'];
$idkmd             = $_GET['idkmd'];
$jumlah_komoditas  = $_GET['jumlah_komoditas'];


$perintah = "UPDATE tb_komoditas SET jumlah_komoditas='$jumlah_komoditas'  WHERE id_komoditas='$idkmd'";

echo $perintah;

$query = mysqli_query($koneksi,$perintah);
$lokasi = "Location: ../index.php?page=list-komoditas&&idklp=".$idklp."&&idang=".$idang;
echo $lokasi;
header($lokasi);
?>