<?php
  $siswa = [["Arin", 22, "mojosari"],
            ["Vansa", 29, "Wonoayu"],
            ["Jaya", 26, "Krian"]];
  foreach($siswa as $s){
    echo "Halo saya $s[0], absen $s[1], rumahku $s[2] <br>";
     
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Siswa</title>
</head>
<body>
  <h1>Data Siswa XII RPL 2</h1>
  <?php foreach($siswa as $s) :?>
    <ul>
      <li>Nama : <?= $s[0]; ?></li>
      <li>Absen : <?= $s[1]; ?></li>
      <li>Alamat : <?= $s[2]; ?></li>
    </ul>
    <?php endforeach ;?>
</body>
</html>