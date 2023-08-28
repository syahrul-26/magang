<?php
include('../../configurasi/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM tb_kelompok WHERE id='$id'");
header('Location: ../index.php?page=data-model');
?>