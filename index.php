<?php
// Kata selamat datang
$welcome = 'SELAMAT DATANG';

// nama saya
$nama = 'AGUS';

$keterangan = ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, modi? Quae labore repudiandae ipsa minus sit aspernatur, in repellat. Qui!';

$footer = 'copyright by Agus';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1> <?php echo $welcome . ' ' . $nama ?> </h1>
    <p><?= $keterangan ?></p>

    <p><?= $footer ?></p>


</body>

</html>