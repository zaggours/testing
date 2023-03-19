<?php
require 'koneksi.php';
if ( isset($_POST['submit'])) {
  if(db_user($_POST) > 0) {
    echo "<script> alert('berhasil');
    document.location.href = 'dashboard.php';
    </script>";
  } else {
    echo "<script> alert('gagal');
    </script>";
  }
}



?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="regis">
    <form action="" method="post">
    <input class="wrapper" type="text" name="username" placeholder="Username" id="username">
    <input class="wrapper" type="password" name="password" placeholder="Password" id="Password">
   
  </div>
  <div class="button">

    <button type="submit" name="submit" id="submit">Daftar</button>
  </form>
  </div>

</body>
</html>