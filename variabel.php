<?php

// String 
$string = "Tipe data string digunakan untuk menampilkan karakter ";

$namaDepan = 'Agus ';
$namaBelakang = 'Asso';
$alamat = 'waena';

//  Integer/int
$x = 7;
$y = 9;

$tambah = $x + $y;
$kurang = $x - $y;
$kali = $x * $y;
$bagi = $x / $y;


//Float
$float = 'tipe data float digunakan untuk menyimpan bilangan pecahan';
$pecahan = 10.4;
$pecahan_dua = 22.7;


// Boolean
$boolean = 'Tipe Boolean hanya berisi dua nilai yaitu true atau false';
$satu = true;
$nol = false;

// AND = X
$and = $satu && $nol;

// OR = +
$or = $satu || $nol;


//nul
$null = 'Tipe nul biasa untuk mengantikan variabel yang kosong';

$r = '';
$r = null;

// Arry
$arry = 'Tipe data arry digunakan untuk menyimpan banyak data salam satu variabel';

$nama = ['Samuel', 'Billy', 'Acho', 'Chalvin', 'Agus',];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Menampilkan variabel string -->
    <p> <?= $string ?> </p>
    <p> Nama Saya <?= $namaDepan . $namaBelakang ?>. saya tinggal di <?= $alamat ?> </p>

    <p> Tipe integer digunakan untuk menyimpan data bilangan bulat </p>

    <p> <?= $x ?> + <?= $y ?> = <?= $tambah ?> </p>
    <p> <?= $x ?> - <?= $y ?> = <?= $kurang ?> </p>
    <p> <?= $x ?> x <?= $y ?> = <?= $kali ?> </p>
    <p> <?= $x ?> : <?= $y ?> = <?= $bagi ?> </p>

    <br>
    <br>

    <p> <?= $float ?> </p>
    <p> <?= $pecahan ?></p>
    <p> <?= $pecahan_dua ?></p>

    <br>
    <br>
    <p> <?= $boolean ?></p>
    <p> <?php var_dump($and) ?> </p>
    <p> <?php var_dump($or) ?> </p>

    <p> <?= $null ?> </p>
    <p> <?php var_dump($r) ?> </p>


    <br>
    <br>
    <p><?= $arry ?></p>

    <?php foreach ($nama as $n) : ?>
        <p> <?= $n ?></p>
    <?php endforeach; ?>


</body>

</html>