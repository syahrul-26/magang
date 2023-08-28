<?php
include('../../configurasi/config.php');
$nama_kelompok                          = $_GET['nama_kelompok'];
$desa                                   = $_GET['desa'];
$kecamatan                              = $_GET['kecamatan'];
$nama_ketua                             = $_GET['nama_ketua'];
$nama_sekertaris                        = $_GET['nama_sekertaris'];
$nama_bendahara                         = $_GET['nama_bendahara'];
$tanggal_berita_acara                   = $_GET['tanggal_berita_acara'];
$no_sk_berita_acara                     = $_GET['no_sk_berita_acara'];
$no_sk_kades                            = $_GET['no_sk_kades'];
$tanggal_sk_kades                       = $_GET['tanggal_sk_kades'];
$no_surat_domisili                      = $_GET['no_surat_domisili'];
$no_surat_permohonan_pengesahan         = $_GET['no_surat_permohonan_pengesahan'];
$tanggal_surat_permohonan_pengesahan    = $_GET['tanggal_surat_permohonan_pengesahan'];
$komoditas_utama                        = $_GET['komoditas_utama'];
$sk_pengesahan                          = $_GET['sk_pengesahan'];
$tanggal_sk_pengesahan                  = $_GET['tanggal_sk_pengesahan'];
$ver_sk_kadis                           = $_GET['ver_sk_kadis'];
$no_sk_kadis                            = $_GET['no_sk_kadis'];
$ver_terdaftar_simluhtan                = $_GET['ver_terdaftar_simluhtan'];
$sk_kemkumhan                           = $_GET['sk_kemkumhan'];
$tanggal_sk_kemkumhan                   = $_GET['tanggal_sk_kemkumhan'];
$keterangan                             = $_GET['keterangan'];
$status_aktif                           = $_GET['status_aktif'];

$stampwaktu = date('Ymdhis', time());
echo $stampwaktu,"<br></br>";

$perintah = "INSERT INTO tb_kelompok (id,nama_kelompok,desa,kecamatan,nama_ketua,
nama_sekertaris,nama_bendahara,tanggal_berita_acara,no_sk_berita_acara,no_sk_kades,tanggal_sk_kades,no_surat_domisili,
no_surat_permohonan_pengesahan,tanggal_surat_permohonan_pengesahan,komoditas_utama,sk_pengesahan,tanggal_sk_pengesahan,
ver_sk_kadis,no_sk_kadis,ver_terdaftar_simluhtan,sk_kemkumhan,tanggal_sk_kemkumhan,keterangan,status_aktif) 
VALUES('$stampwaktu','$nama_kelompok','$desa','$kecamatan','$nama_ketua','$nama_sekertaris','$nama_bendahara','$tanggal_berita_acara',
'$no_sk_berita_acara','$no_sk_kades','$tanggal_sk_kades','$no_surat_domisili','$no_surat_permohonan_pengesahan',
'$tanggal_surat_permohonan_pengesahan','$komoditas_utama','$sk_pengesahan','$tanggal_sk_pengesahan','$ver_sk_kadis',
'$no_sk_kadis','$ver_terdaftar_simluhtan','$sk_kemkumhan','$tanggal_sk_kemkumhan','$keterangan','$status_aktif')";
echo $perintah;
$query = mysqli_query($koneksi,$perintah);
header('Location: ../index.php?page=data-model');
?>