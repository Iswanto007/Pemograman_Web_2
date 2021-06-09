
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
 <title>Login</title>
 <style>
 body{
  font-family: 'Roboto', sans-serif;
 }
 </style>
</head>
<body>
<center>
    <h1>Silakan Login</h1>
    <form action="" method="post">
    <table>
        <tr>
            <td>Username</td><td><input type="text" name="user"></td>
        </tr>
        <tr>
            <td>Password</td><td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td></td><td><input type="reset" value="Cancel"><input type="submit"  name="Login" value="Login"></td>
        </tr>
    </table>
    </form>
    </center>
    <center>
    <?php 
session_start();
if(isset($_POST['Login'])){
 $user=$_POST['user'];
 $pass=$_POST['pass'];

 if($user=="wanto" && $pass="123"){
  $_SESSION['login']=$user;
  echo"<h1>Hore anda berhasil Login!</h1>";
  echo" <h2> klik <a href='pert14_latihan2.php'>disini</a>
  menuju halaman pemeriksaan</h2>";
 }else{
  echo"<script>alert('username/password salah sayang');</script>";
 }
}

?>
    </center>
</body>
</html>