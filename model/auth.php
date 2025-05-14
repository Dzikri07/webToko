<?php
session_start();


require_once 'koneksi.php';

class Auth extends koneksi{

    private $conn;
    public function __construct(){
        parent::__construct();
        $this->conn = $this -> getConnection();
    }

    public function login($email, $password){
        $sql = "SELECT * FROM auth WHERE email = '$email'";
        $query = $this->conn->query($sql);

        if($query->num_rows > 0){
            $row = $query->fetch_array();
            if(password_verify($password, $row['password'])){
                // echo "berhasil login";
                $_SESSION['id_pengguna'] = $row['id_pengguna'];
                return $row['id_pengguna'];
        }else {
            return false;
            // echo "gagal login";
        }
    }
}}


// $auth = new Auth();
// $auth->login('dzikris@gmail.com', "123456");

?>