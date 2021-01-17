<?php
include "koneksi.php";
$nama = $_POST['nama'];
$jmlh = $_POST['jumlah'];
$bln = $_POST['bulan'];

$data = $koneksi->query("INSERT INTO datatabungan (nama,jumlah,bulan) VALUES ('$nama','$jmlh','$bln')");
// $data=$koneksi->query("INSERT INTO `datatabungan`(`id_tabungan`, `nama`, `jumlah`, `bulan`) VALUES ([$nama],[$jmlh],[$bln]");
echo json_encode($data);
?>