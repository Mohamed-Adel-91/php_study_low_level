<?php
/**
 * Class Abstraction
- it's mean that the class can be extended by other classes.
- Cannot Be  Instantiated Directly, Only Through Inheritance. 
|| can't create  object of this class directly 
|| but we can create objects  from child classes which are inherited from this class.
- it made for other classes to use methods and properties defined in a parent class.
- Can make methods & properties. 
- Can have Abstract Method and non Abstract Methods.
- Abstract Methods Contains no body code but it can have argument.
 */

  abstract class MakeDevice 
  {
    public $ram ;
    public function sayHello(){
      echo "Hello";
    }
    abstract public function sayHello2($arg);  // must use it  in any child class otherwise error will occur
     //this method is declared as an Abstract Method , so it must be implemented in any child class.
  }

  class device extends MakeDevice
  {
    public function sayHello2($arg) 
    {
      echo "Hello 2 from MakeDevice!  Argument passed is : ". $arg;  
    }
  }

  $iphone = new device();
  $iphone->sayHello(); // Hello
  $iphone->sayHello2("hi"); // Hello 2 from MakeDevice!