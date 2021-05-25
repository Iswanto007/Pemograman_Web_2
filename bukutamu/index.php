<?php 
include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Buku Tamu</title>
</head>
<body>

<form action="insert_data.php" method="POST">
 <h2>Form Input Buku Tamu</h2>
 <p>
 Nama Lengkap <br>
 <input type="text" name="nama_lengkap" id="nama_lengkap">
 </p>
 <p>
Email <br>
 <input type="text" name="email" id="email">
 </p>
 <p>
 Alamat <br>
 <textarea name="alamat" id="alamat" cols="25" rows="5"></textarea>
 </p>
 <p>
Pesan <br>
 <textarea name="pesan" id="pesan" cols="25" rows="5"></textarea>
 </p>
 <button type="submit" id="submit" name="submit"> Kirim Buku Tamu</button>
 <button type="reset" id="reset"> Hapus</button>
</form>
<br>
<h2>Data Buku Tamu</h2>
<table border="1" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td>No</td>
<td>Nama Lengkap</td>
<td>Email</td>
<td>Alamat</td>
<td>Pesan</td>
</tr>
<?php 
$sql_select = "SELECT *FROM bukutamu ORDER BY id_bukutamu ASC";
$kueri_select = mysqli_query($conn,$sql_select);
while ($data = mysqli_fetch_array($kueri_select))
{
?>
<tr>
<td><?php echo $data['id_bukutamu']; ?></td>
<td><?php echo $data['nama_lengkap']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><?php echo $data['alamat']; ?></td>
<td><?php echo $data['pesan']; ?></td>
</tr>
<?php }?>

</table>

</body>
</html>