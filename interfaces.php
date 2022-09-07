<?php
// Interface definition
interface Animal {
  public function makeSound();
}

interface Fruits {
  public function color();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " Meow ";
  }
}


class Dog  implements Animal{
  public function makeSound() {
    echo " Bark ";
  }
  
  public function eat() {
    echo " Bark ";
  }
  
  public function drink() {
    echo " Bark ";
  }

  public function sss() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}


abstract class Fish implements Animal {
    
  abstract public function eat();
  
  public function drink() {
      echo 'water';
  }
}

class Salmaon extends Fish {
    
    public function makeSound() {
        echo " Sal Sound ";
    }
  
    public function eat() {
        echo 'young fish';
    }
    
    public function eat($a) {
        echo 'young fish';
    }
    
    public function eat($a, $b) {
        echo 'young fish';
    }
  
    
  
}



trait Monkey {
  public function makeSound() {
    echo " Squeak ";
  }
}

trait Lion {
  public function makeDuty() {
    echo " Duty ";
  }
}

class x {
  use Lion, Monkey;
  
}

class Macarel extends Salmaon {
    
    public function makeSound() {
        echo " Macarel Sound ";
    }
    
}

class Sss extends Salmaon  {
    
    public function makeSound() {
        echo " Macarel Sound ";
    }
    
     public function color() {
         
     }
    
}


// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();

//$fish = new Fish();
$salmaon = new Salmaon();

$macarel = new Macarel();


$animals = array($cat, $dog, $mouse, $salmaon, $macarel);

// Tell the animals to make a sound
foreach($animals as $animal) {
  echo '<br/>';
  //$animal->makeSound();
}



class AccessModifier {
    
    private $x;
    protected $y;
    
    private function privateFunction() {
        echo 'private';
    }
    
    protected function protectedFunction() {
        echo 'protected';
        
    }
    
    public function publicFunction() {
        echo 'public';
        
    }
    
}

class ExtendAccessModifier extends AccessModifier {
    
    function x() {
        $this->protectedFunction();
    }
    
}

$access_modifier = new AccessModifier();
//$access_modifier->protectedFunction();

$e_access_modifier = new ExtendAccessModifier();
$e_access_modifier->x();
