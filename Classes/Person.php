<?php


class Person {
    
    var $id = '';
    var $name = '';
    var $birth_date = '';
    
    function __construct($name) {
        echo '<br/>';
        echo 'Hello, '.$name;
        echo '<br/>';
    }
    
    function setName($name) {
        $this->name = $name;
    }
    
    function getName() {
        echo $this->name;
    }
    
    function setBithDate() {
        
    }
    
    function __destruct() {
        echo '<br/>';
        echo "This is destructor";
        
    }
    
}

$gouda_obj = new Person('Mostafa');

$gouda_obj->name = 'Gouda Elalfy';
$gouda_obj->getName();

$ahmed_obj = new Person('Ahmed');

$reda_obj = new Person('Huda');