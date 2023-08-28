<?php
include('../../configurasi/config.php');
$idang     = $_GET['idang'];
$idklp     = $_GET['idklp'];
$idkmd     = $_GET['idkmd'];

$perintah = "DELETE FROM tb_komoditas WHERE id_komoditas='$idkmd'";

echo $perintah;

$query = mysqli_query($koneksi,$perintah);
$lokasi = "Location: ../index.php?page=list-komoditas&&idklp=".$idklp."&&idang=".$idang;
echo $lokasi;
header($lokasi);
?>