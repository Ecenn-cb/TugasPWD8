<?php

require 'Database.php';

$dbInstance = new Database();
$db = $dbInstance->mysqli; // Ambil koneksi mysqli dari class Database

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$uang = $_POST['uang'];

$query = $db->prepare('UPDATE koruptor SET nama = ?, tanggal_lahir = ?, uang = ? WHERE nik = ?');
$query->execute([$nama, $tanggal_lahir, $uang, $nik]);

header('Location: index.php?pesan=Data berhasil diupdate');
exit;
