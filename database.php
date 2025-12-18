<?php
class Database {
    protected $host, $user, $password, $db_name, $conn;

    public function __construct() {
        $this->getConfig();
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db_name);
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    private function getConfig()
{
    // Gunakan include_once dan pastikan path filenya benar
    // Karena index.php berada di root, maka pathnya langsung "config.php"
    include_once("config.php"); 
    
    // Berikan instruksi global agar metode ini bisa membaca variabel dari luar
    global $config; 

    $this->host = $config['host'];
    $this->user = $config['username'];
    $this->password = $config['password'];
    $this->db_name = $config['db_name'];
}

    public function query($sql) {
        return $this->conn->query($sql);
    }

    public function insert($table, $data) {
        if (is_array($data)) {
            $columns = implode(",", array_keys($data));
            $values = "'" . implode("','", array_values($data)) . "'";
            $sql = "INSERT INTO $table ($columns) VALUES ($values)";
            return $this->conn->query($sql);
        }
        return false;
    }
}
?>