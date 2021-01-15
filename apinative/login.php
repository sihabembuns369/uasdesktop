<?php
include "koneksi.php";
$user = $_POST['x'];
$pass = $_POST['z'];
$sql="SELECT * FROM user WHERE username='$user' AND password='$pass'";
$query=mysqli_query($koneksi,$sql);
$data=mysqli_fetch_array($query);

if($data>0){
    echo 1;
    // json_encode($query);
}else{
echo 0;
}
?>