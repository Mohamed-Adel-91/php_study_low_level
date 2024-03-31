<?php
/**
 * Static Keyword
  - static properties/methods are used to access properties and methods in global scope
  - Declaring class props or methods as static : 
    make them accessible without needing an instantiation of the class
  - because static methods are callable without instance of the object created
    the pseudo-variable $this is not available inside the method declared as static.
  - A property declared as static can't be accessed with instantiated class object
    (through a static method we can)
  - " one of major benefits to using static properties is
    they keep their stored values for duration of the script "
 */

class x_phone {
  public static $name = 'Mohamed';
  public $ram = '2GB';
  public static function sayHello (){
    //$this->name;  // we can't use this with static
    return 'Hello';
  }
}

$xx_phone= new x_phone();
echo $xx_phone->sayHello();
// echo $xx_phone->$name; // we can't do that, it will give error
                          // because we are trying to access non-static prop from a static context
echo '<br>';
echo x_phone::$name;
echo '<br>';
echo x_phone::sayHello();