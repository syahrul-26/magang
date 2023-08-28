<?php
include('../../configurasi/config.php');
$idklp             = $_GET['idklp'];
$idang             = $_GET['idang'];
$nama              = $_GET['nama'];
$nik               = $_GET['nik'];
$desa              = $_GET['desa'];
$kecamatan         = $_GET['kecamatan'];


$perintah = "UPDATE tb_anggota SET nama='$nama',nik='$nik',desa='$desa',kecamatan='$kecamatan'  WHERE id_anggota='$idang'";

echo $perintah;

$query = mysqli_query($koneksi,$perintah);
$lokasi = "Location: ../index.php?page=list-anggota&&idklp=".$idklp;
echo $lokasi;
header($lokasi);
?>