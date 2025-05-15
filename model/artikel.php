<?php

require_once("koneksi.php");

class artikel extends koneksi{
    private $conn;

    public function __construct(){
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    public function getAll(){
        $query = "SELECT * FROM artikel ORDER BY id DESC";
        $result = $this ->conn->query($query);

        $data = array();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }

        return $data;
    }


}

// $artikel = new artikel();
// print_r($artikel->getAll());

?>