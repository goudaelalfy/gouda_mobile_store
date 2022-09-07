<?php

namespace DB;

use PDO;

class Connection extends PDO {

    var $servername = "localhost";
    var $database = "mobile_store";
    var $username = "root";
    var $password = "";

    function __construct() {

        parent::__construct("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);

        try {
            
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //echo "Connected successfully";
            
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}
