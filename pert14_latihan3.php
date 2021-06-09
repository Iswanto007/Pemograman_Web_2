<?php 
session_start();

if(isset($_SESSION['login'])){
unset($_SESSION);
session_destroy();

echo"<h1> anda sudah berhasil LOGOUT </h1>";
echo"<h2>Klik <a href='pert14_latihan1.php'>disini</a> untuk kembali login</h2>";
echo"<h2> sekarang anda tidak bisa masuk lagi kehalaman <a href='pert14_latihan2.php'>admin lagi</h2>";
}

?>