<?php

$nama='Tirta Raja';
$anak='pertama';
$domisili='Bogor';
$alamat='Perum Bumi Sentosa';
$mitra='NFCOM akademi Fullstack Web Developer';
$kampus='STT Terpadu Nurul Fikri';
$tanggal=20;
$tempat='jakarta';
$tahun=2000;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1 align="center">
        Hompepage
    </h1>
    <fieldset>
        <legend>
            <font size="5", color="black" face="calibri">
            Personal Profile
            </font>
        </legend>
        <img src="https://shanibacreative.com/wp-content/uploads/2020/06/membuat-foto-profil-yang-bagus.jpg" 
        alt="" width="20%" align="center" hspace="10">
    <p align="justify">
        Perkenalkan nama saya <?= $nama ?>, saya merupakan anak <?= $anak ?> dari 3 bersaudara,
        Saya untuk saat ini tinggal di <?= $domisili ?> bersama orang tua saya. saya sedang menjalankan program
        kampus merdeka di mitra <?= $mitra ?>, dan saya berkuliah di <?= $kampus ?>.
    </p>
    </br>
    </br>
    
    <pre>
    Nama          : <?= $nama ?><br>
    Tanggal Lahir : <?= $tanggal ?> / <?= $tempat ?> / <?= $tahun ?><br>
    Alamat        : <?= $alamat ?><br>
    Universitas   : <?= $kampus ?>
    </pre>
    </fieldset>
</body>
</html>

