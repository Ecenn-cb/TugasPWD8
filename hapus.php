<?php

require_once 'Database.php'; // atau "db.php", sesuaikan dengan nama file kamu

$nik = $_GET['nik'];

$db = new Database(); // pastikan class Database digunakan
$stmt = $db->prepare('DELETE FROM koruptor WHERE nik = ?');
$stmt->bind_param("s", $nik);
$stmt->execute();

header('Location: index.php');
