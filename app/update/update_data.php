<?php
include('../../configurasi/config.php');
$idklp                                  = $_GET['id'];
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

$perintah = "UPDATE tb_kelompok SET nama_kelompok='$nama_kelompok',desa='$desa',kecamatan='$kecamatan',nama_ketua='$nama_ketua',
nama_sekertaris='$nama_sekertaris',nama_bendahara='$nama_bendahara',tanggal_berita_acara='$tanggal_berita_acara',no_sk_berita_acara='$no_sk_berita_acara',
no_sk_kades='$no_sk_kades',tanggal_sk_kades='$tanggal_sk_kades',no_surat_domisili='$no_surat_domisili',no_surat_permohonan_pengesahan='$no_surat_permohonan_pengesahan',
tanggal_surat_permohonan_pengesahan='$tanggal_surat_permohonan_pengesahan',komoditas_utama='$komoditas_utama',sk_pengesahan='$sk_pengesahan',
tanggal_sk_pengesahan='$tanggal_sk_pengesahan',ver_sk_kadis='$ver_sk_kadis',no_sk_kadis='$no_sk_kadis',ver_terdaftar_simluhtan='$ver_terdaftar_simluhtan',
sk_kemkumhan='$sk_kemkumhan',tanggal_sk_kemkumhan='$tanggal_sk_kemkumhan',keterangan='$keterangan',status_aktif='$status_aktif'  WHERE id='$idklp'";

echo $perintah;

$query = mysqli_query($koneksi,$perintah);
header('Location: ../index.php?page=data-model');
?>