<?php


class StaticKeyword {

    static $static_var = '';
    
    function __construct($var) {
        self::$static_var = $var;
    }
    
    public static function staticMethod() {
        //echo "Hello World!";
        echo self::$static_var;
    }

}


/*
class StaticKeyword {

    var $static_var = '';
    
    function __construct($var) {
        $this->static_var = $var;
    }
    
    public function staticMethod() {
        //echo "Hello World!";
        echo $this->static_var;
    }

}
 * 
 */


$obj1 = new StaticKeyword('Gouda');
$obj1->staticMethod();
echo '<br/><br/>';

$obj2 = new StaticKeyword('Ahmed');
$obj2->staticMethod();
echo '<br/><br/>';

$obj3 = new StaticKeyword('Mohamed');
$obj3->staticMethod();
echo '<br/><br/>';

echo '<br/><br/>';
echo '<br/><br/>';
echo '<br/><br/>';

$obj1->staticMethod();
echo '<br/>';
$obj2->staticMethod();
echo '<br/>';
$obj3->staticMethod();

echo '<br/><br/>';
echo '<br/><br/>';

StaticKeyword::staticMethod();