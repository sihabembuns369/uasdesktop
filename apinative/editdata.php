<?php
include "koneksi.php";
$id=$_POST['id'];
$nama = $_POST['nama'];
$jmlh = $_POST['jumlah'];
$bln = $_POST['bulan'];
$data=$koneksi->query("UPDATE * FROM datatabungan SET nama='$nama',jumlah='$jmlh',bulan='$bln' WHERE id_tabungan='$id'");
echo ($data);
?>