<?php

namespace Models;
require_once '../DB/Connection.php';
require_once 'Base.php';

class Admin extends Base {

    function __construct($id) {
                
        $this->table = 'admins';
        parent::__construct($id); 
    }
    
    function getName() {
        //return $this->row['name'];
        return $this -> row -> name;
    }
    
    function getRowsCount() {
        return 5;
    }
    
    /*
    function getRowsCount($count) {
        return $count;
    }
    */
    

    function __destruct() {
        echo '<br/>';
        echo "This is destructor";
        
    }
}

$admin_obj = new Admin(1);

$current_row = $admin_obj->getRow();

print_r($current_row);

echo '<br/><br/><br/>';

echo $admin_obj->getName();




