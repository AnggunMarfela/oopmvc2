<?php
class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $name = 'skp'; // Ganti dengan nama database yang sesuai
    public $conn;

    public function openDbConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->name, $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }

    public function closeDbConnection() {
        $this->conn = null;
    }
}
?>
