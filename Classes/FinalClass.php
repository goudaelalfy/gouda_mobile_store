<?php

  class FinalClass {
    
    var $id = '';
    private $name = '';
    private $age = '';
    
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
    
    function setAge($age) {
        if($age>18) {
            $this->age = $age;
        } else {
            $this->age = 'Under Age';
        }
    }
    
    final function getAge() {
        echo $this->age;
    }
    
    function __destruct() {
        echo '<br/>';
        echo "This is destructor";
        
    }
    
}

class H extends FinalClass {
    
    function getAge() {
        echo 'from child';
    }
}


$obj = new H('Gouda');
echo '<br/>';

$obj->setAge(20);

$obj->getAge();
