<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Selamat Datang</title>
</head>
<body>
 <center>
 <?php 
 session_start();
if(isset($_SESSION['login'])){
  echo" <h1>Selamat Datang ".$_SESSION['login']."</h1>" ;
  echo"<h2>Halaman ini hanya bisa di akses jika anda sudah login</h2>";
  echo"<h2><a href='pert14_latihan3.php'>Logout </a></h2>";
 }
 else{
  die("Anda belum login!Silahkan Login terlebih dahulu <a href='pert14_latihan1.php'> disini</a>");
 }
  ?>
 
 </center>
</body>
</html>