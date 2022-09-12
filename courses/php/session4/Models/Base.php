<?php

namespace Models;

require_once '../DB/Connection.php';

use DB\Connection;

 class Base {

    var $table = '';
    
    var $id= 0;
    
    var $row;
    
    function __construct($id) {
        
        $this->id = $id;
        
        $conn = new Connection();
        
        $sql = "select * from {$this->table} where id={$id}";
        
        $result = $conn->query($sql);

        //$row = $result->fetch();
        $row = $result->fetchObject();
        
        $this->row = $row;
    }
    
    function getRow() {
        return $this->row;
    }
    
    
    
    //abstract function getRowsCount();

}