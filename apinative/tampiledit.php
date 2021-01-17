<?php
include "koneksi.php";
$id=$_POST['id'];
$data=$koneksi->query("SELECT * FROM datatabungan WHERE id_tabungan='$id'")->fetch_assoc();
echo json_encode($data);
?>