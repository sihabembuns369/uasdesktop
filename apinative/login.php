<?php
	if(count($_POST)>0) {
        // $conn = mysqli_connect("localhost","root","","blog_samples");
        include "koneksi.php";
		$result = mysqli_query($koneksi,"SELECT * FROM user WHERE username='" . $_POST["usser"] . "' and password = '". $_POST["pass"]."'");
	$hasil=	"SELECT * FROM user WHERE username='" . $_POST["usser"] . "' and password = '". $_POST["pass"]."'";
        // $count  = mysqli_num_rows($result);
        if($hasil == ''){
            return 1;
        }else{
            return 0;
        }
		     
	}
?>