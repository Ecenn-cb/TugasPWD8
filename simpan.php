<?php

require_once "Koruptor.php";

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$uang = $_POST['uang'];

$koruptor = new Koruptor();
$sukses = $koruptor->simpanData($nik, $nama, $tanggal_lahir, $uang);

if ($sukses) {
    header("Location: index.php");
} else {
    echo "Gagal menyimpan data.";
}
