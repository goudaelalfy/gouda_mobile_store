<?php
    
namespace Admin;

require_once 'BaseClass.php';
//require_once '../Frontend/BaseClass.php';
//use Frontend\BaseClass;

class Users extends BaseClass {

    // will override the base constructor
    /*
    function __construct() {
               
    }
     * 
     */

}

//$users_obj = new Users('users');

// will give error
//$users_obj = new Users();

echo $users_obj->screen_title;