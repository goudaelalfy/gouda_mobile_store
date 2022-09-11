<?php

namespace Models;
use DB\Connection;
require_once '../DB/Connection.php';
require_once 'Base.php';

class Brands extends Base{
    
    function __construct($id) {  
        $this->table = 'brands';
        parent::__construct($id); 
    }
    
    function Select(){
        return $this->row;
    }
    
    function Delete(){
        $conn = new Connection();
        $sql = "Delete from $this->table where id = $this->id";
        $res = $conn ->query($sql);
        if ($res){
            echo "<br>the Row is Deleted";
        } else {
            echo $conn->errorCode();
        }
    }
    function  Add($name=null , $decr=null ,$active=null){
       $conn = new Connection();
       $sql = "INSERT INTO $this->table (name, description, active) VALUES (?,?,?)";
       $res = $conn->prepare($sql);
       $res->execute([$name, $decr,$active]);
       if ($res){
            echo "<br>the Row is inserted";
        } else {
            echo $conn->errorInfo();
        }
    }
    function Update($name=null , $decr=null ,$active=null){
        $conn = new Connection();
        $sql = "UPDATE $this->table SET name=?, description=?, active=? WHERE id=?";
        $res= $conn->prepare($sql);
        $res->execute([$name, $decr, $active, $this->id]);
        if ($res){
            echo "<br>the Row is updated";
        } else {
            echo $conn->errorInfo();
        }
    }
}
$brands = new Brands(5);

$row = $brands->Select();
echo "<pre>";
print_r($row);
echo "</pre>";
//$brands->Delete();
//$brands ->Add("iphone14","mymobileisiphone",'1');
$brands ->Update("iphone7","mobileisiphone",'1');
