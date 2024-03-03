<?php

class DatabaseController {

    private $conn;

    protected function connect() {
        $this->conn = new mysqli("localhost", "root", "", "oop_php");
    
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    
        return $this->conn;
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }

    public function close() {
        $this->conn->close();
    }


}


  

?>
