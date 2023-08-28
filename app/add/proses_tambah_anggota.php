<?php
include('../../configurasi/config.php');
$idklp          = $_GET['idklp'];
$nama           = $_GET['nama'];
$nik            = $_GET['nik'];
$desa           = $_GET['desa'];
$kecamatan      = $_GET['kecamatan'];

echo "id_kelompok = ",$idklp, "<br>";

$stampwaktu = date('Ymdhis', time());
echo "id_anggota = ",$stampwaktu,"<br></br>";


$perintah = "INSERT INTO tb_anggota (id_anggota,id_kelompok,nama,nik,desa,kecamatan) VALUES('$stampwaktu','$idklp','$nama','$nik','$desa','$kecamatan')";
echo $perintah;
$query = mysqli_query($koneksi,$perintah);
$lokasi = "Location: ../index.php?page=list-anggota&&idklp=".$idklp;
echo $lokasi;
header($lokasi);

?>