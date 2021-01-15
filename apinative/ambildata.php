<?php
include "koneksi.php";
$hasil= $koneksi->query("SELECT * FROM datatabungan");
foreach ($hasil as $isi):

// $result=mysqli_fetch_array($hasil);

// while ($fetchData=$queryResult->fetch_assoc()){
//     $result[]=$fetchData;
// echo json_encode($result);
// echo $result;?>
<tr>
    <td><?= $isi['id_tabungan']?></td>
    <td><?= $isi['nama']?></td>
    <td><?= $isi['jumlah']?></td>
    <td><?= $isi['bulan']?></td>
    <td>
    <button type="button" class="" onclick="edit()">edit</button>
    <button type="button" class="" onclick="hapus()">hapus</button>
    </td>

</tr>
<?php endforeach ?>