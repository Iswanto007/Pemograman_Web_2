<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Contoh penggunaan UDF</title>
</head>
<body>
 <!menentukan Form Input>
 <form action="#" method="POST">
 Masukan Bilangan pertama :<br>
 <input type="number" name="A" size=10><br>
 Masukan Bilangan kedua : <br>
 <input type="number" name="B" size=10><br>
 <br>
 <input type="submit" value="hitung">
 </form>
 <!membandingkan 2 buah bilangan yang di input>
 <?php
 if(isset($_POST['A']) || isset($_POST['B']) ){
  $A=$_POST['A'];
  $B=$_POST['B'];
 }
 function jumlah($A,$B){
  $jumlahbil=$A+$B;
  return $jumlahbil;
 }
 function kurang($A,$B){
  $kurangbil=$A-$B;
  return $kurangbil;
 }
 function kali($A,$B){
  $kalibil= $A*$B;
  return $kalibil;
 }
 function bagi($A,$B){
  $bagibil= $A/$B;
  return $bagibil;
 }
 echo"<br>";
 echo("Bilangan pertama :");
 echo $A;
 echo"<br>";
 echo("Bilangan kedua :");
 echo $B;
 echo"<br><br>";

 echo "hasil Penjumlahan 2 Buah bilangan";
 echo"<br>";
 $jumlahbil=&jumlah($A,$B);
Printf( "Penjumlahan antara : %d + %d = %d ",$A,$B,$jumlahbil);
Echo "<br><br>";
Echo "Hasil Pengurangan 2 buah bilangan ";
Echo "<br>";
$kurangbil=&kurang($A,$B);
Printf( "Pengurangan antara : %d - %d = %d ",$A,$B,$kurangbil);
Echo "<br><br>";
Echo "Hasil Perkalian 2 buah bilangan ";
Echo "<br>";
$kalibil=&kali($A,$B);
Printf( "Perkalian antara : %d * %d = %d ", $A, $B, $kalibil);
Echo "<br><br>";
Echo "Hasil Pembagian 2 buah bilangan ";
Echo "<br>";
$bagibil=&bagi($A,$B); 
Printf( "Pembagian antara : %d / %d = %d ",$A,$B,$bagibil);
Echo "<br><br>"; 

?>
</body>
</html>