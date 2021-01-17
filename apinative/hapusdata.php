<?php
include "koneksi.php";
$id=$_POST['id'];
$data=$koneksi->query("DELETE FROM datatabungan WHERE id_tabungan='$id'");
echo ($data)
?>