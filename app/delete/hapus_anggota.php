<?php
include('../../configurasi/config.php');
$idang     = $_GET['idang'];
$idklp     = $_GET['idklp'];

$perintah = "DELETE FROM tb_anggota WHERE id_anggota='$idang'";

echo $perintah;

$query = mysqli_query($koneksi,$perintah);
$lokasi = "Location: ../index.php?page=list-anggota&&idklp=".$idklp;
echo $lokasi;
header($lokasi);
?>