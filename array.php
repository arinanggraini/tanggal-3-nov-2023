<?php
   ///array = variabel yang memnyimpan banyak nilai
   //cara 1
   $nama = array("Dani","Aan","Ainun");
   //cara 2
   $absen = [4, 14, 7];
   //cetak array (var_dump & print_r)
   var_dump($nama);
   echo "<br>";
   echo "Halo saya $nama[0], absen $absen[0] <br>";
   echo "Halo saya $nama[1], absen $absen[1] <br>";
   echo "Halo saya $nama[2], absen $absen[2] <br>";

   //foreach
   foreach($nama as $n){
    echo "Halo saya $n <br>";
   }
   foreach($absen as $a){
    echo "Absen saya $a <br>";
   }
?>