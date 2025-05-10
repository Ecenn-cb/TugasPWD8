<?php

require_once "Database.php";

class Koruptor {
    public $db;

    function __construct() {
        $this->db = new Database(); // Sesuai nama kelas Database
    }

    function getDataKoruptor() {
        return $this->db->select("koruptor"); // Tabel lowercase
    }

    function simpanData($nik, $nama, $tanggal_lahir, $uang) {
        $stmt = $this->db->prepare("INSERT INTO koruptor (nik, nama, tanggal_lahir, uang) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nik, $nama, $tanggal_lahir, $uang);
        return $stmt->execute();
    }
}
