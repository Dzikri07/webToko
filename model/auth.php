<?php
session_start();
require_once 'koneksi.php';

class Auth extends koneksi {
    private $conn;

    public function __construct() {
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    public function login($email, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM auth WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['id_pengguna'] = $row['id_pengguna'];
                return $row['id_pengguna'];
            }
        }
        return false;
    }

    public function getUserById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM auth WHERE id_pengguna = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}


// $auth = new Auth();
// $auth->login('dzikris@gmail.com', "123456");

?>