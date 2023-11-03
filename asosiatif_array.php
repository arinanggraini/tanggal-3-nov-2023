<?php
   $data_siswa = [
    ["nama" => "Arin",
    "absen" => "22",
    "kelas" => "XII RPL 2"
],
    ["nama" => "Aline",
    "absen" => "11",
    "kelas" => "XII RPL 2",
],
    ["nama" => "Badi",
    "absen" => "28",
    "kelas" => "XII RPL 2",
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Asosiatif Array</title>
</head>
<body>
    <h1>Tabel Data Siswa</h1>
    <table border="=1">
        <tr>
            <th>Nama</th>
            <th>Absen</th>
            <th>kelas</th>
        </tr>
        <?php foreach($data_siswa as $s) :?>
            <tr>
                <td><?= $s["nama"];?> </td>
                <td><?= $s["absen"];?> </td>
                <td><?= $s["kelas"];?> </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>