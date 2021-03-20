<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css">
 <title>pertemuan 4</title>
</head>
<body>
 <div class="section">
  <div class="isi">
  <h2>Tabel perkalian</h2>
  <hr size="3px" width="150px" align="left" color="blue">
  <?php 
  $i=12;
  for($j=15; $j <= 45; $j=$j+2){
    $k= $i*$j;
    echo $i."x".$j."=".$k."<br>";
  }
 ?>
  </div>
 </div>
</body>
</html>
