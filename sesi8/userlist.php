<h3>Daftar User</h3>
<table>
    <tr>
        <td>1</td>
        <td>nama lengkap</td>
        <td>email</td>
        <td><a href="tbuser.php?aksi=new">tambah</a></td>

    </tr>
<?php 
$sql = "SELECT nama, email, iduser FROM tbuser ORDER BY nama;";
$hasil = mysqli_query($cnn, $sql);
$cx = 1;
while($h = mysqli_fetch_assoc($hasil)){


?>

    <tr>
        <td><?=$CX?></td>
        <td><?=$h["Name"]?></td>
        <td><?=$h["Email"]?></td>
        <td>Ubah Hapus</td>
    </tr>
<?php
    $CX++;
}
?>


</table>