<?php

class Database {
    public $mysqli;

    function __construct() {
        $this->mysqli = new mysqli("localhost", "root", "", "pwd2");

        if ($this->mysqli->connect_error) {
            die("Koneksi gagal: " . $this->mysqli->connect_error);
        }
    }

    function select($table) {
        $sql = "SELECT * FROM $table";
        $result = $this->mysqli->query($sql);
        return $result;
    }

    function prepare($query) {
        return $this->mysqli->prepare($query);
    }
}
