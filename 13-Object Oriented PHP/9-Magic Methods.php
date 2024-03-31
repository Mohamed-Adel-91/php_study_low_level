<?php
/**
 * Magic methods :-
-- Methods with special name start with double underscore  (__) and are called when the corresponding event
*-- Kinds of Magic methods --*

*1. Constructor -
- __construct() is a method called when object created
- can be used to initialize an object, set default values for properties etc.

*2. Destructor - 
- __destruct() is called just before an object is destroyed

*3. Getter/Setter -
- Used to get or set the value of private/protected variables from outside the class
- If no arguments provided in function then it's known as a "Getter" otherwise it's known as a "setter".

**GET
- __get($prop) Calling when getting A property not Accessible or not found
- Accept one  parameter [$prop] which will be returned by this function
- Can also return Array or Object

**SET
- __set($prop,$value) Called when setting a Value to Property that is not accessible or not Found
- Accept two Parameters [$prop,$value]. $value is the Value we want to Set on the Property
- Must Return void


*4. Callback functions - 
- Called when certain operations occur like array_walk(), sort(), shuffle() etc.

*5. Operator Overloading -  
- Allows user defined classes to use operators overloading which allows objects to behave like builtin data types.
- Allows user defined classes to use operators overloading which allows objects of that class to perform arithmetic operations using standard PHP operators.

*6. String conversion -  
- __toString() returns string representation of an object when echoed directly.

*7. Cloning -  
- __clone() is called whenever cloning occurs. It allows you to perform any clean up operation before cloning takes place.
- __clone() is called when cloning an object. This can be useful if you want to perform some action whenever an object is copied.
- typical copy of object in php works by reference. if you need to make a real Copy of an object use __clone().
that means both (main and copy)  objects share same memory location so changes made in one reflects in another and interlinked.
- the clone operation creates a so-called “shallow copy”: of the original instance,
which means that is constructs a new object with all fields duplicated.
- the above technique works with a class having data members that are of intrinsic type i.e.
int, boolean, string, float, etc., However this technique will not work with class that has data 
member which is an object of another class . In  such scenario , the clone object continues to share 
the reference of data member object of class that was cloned.
- magic method clone Executes when object cloning is performed


*8.  Serialization & Unserialization -
- serialize() converts an object into a string so that it can be stored in a file or database.
- unserialize() does the reverse operation and rebuilds the original object from the serialized data.

*9. Dynamic methods - 
- When PHP interpreter doesn’t find a method in the class it looks for dynamic methods.

*10. Call -
- __call() Called when invoking function not accessible or not found
- Accept 2 params [ $methodName , $params/$arguments ]
- The call magic method allows objects to handle calls to methods 
which do not exist in that particular object static methods using :: operator 

 */
// #############################################################################
// __construct()
echo '<hr>';
class Dog 
{
    public function __construct()
    {
      echo "Dog barks\n";
    }
}

$dog = new Dog(); // Outputs: Dog barks with out call method
// #############################################################################
// __call()
echo '<hr>';
class Cat
{
  public $name;
  public $color;
  public function __call($methodName, $arguments)
  {
    if ($this->name == 'speak') 
    {
      echo "Meow! My name is " . $this->name . ". I am " . $this->color . "<br>";
      print_r($arguments);
    }
    else  
    {
      die("Unable to execute method $methodName");
    }
  }
}
$cat = new Cat();
$cat->name = "speak";
$cat->color = "white";
$cat->mow("cat",'dog','fox'); // Outputs: Meow! My name is speak . I am white
echo '<pre>';
print_r($cat);
echo '</pre>';
// #############################################################################
//  __get() and __set()
echo '<hr>';
class Bird 
{ 
  public $weight;  
  public $color;
  public function __get($property) 
  {  
    echo("Invalid property: '$property'. ");      
  }    

}    

$bird = new Bird();        
$bird->weight = 0.5 . ' KG';    
$bird->color = 'blue';
echo $bird->weight."<br>";           // outputs 0.5    
echo $bird->kind."<br>";             

class Bird2 
{ 
  public $weight;  
  public $color;
  private $kind;
  public function __set($name, $value) // work with private properties or variable not  declared as a class property
  {  
    echo("Invalid property: '$name'. <br>");
    echo("Invalid value: '$value'. <br>");
  }    

}    

$bird2 = new Bird2();        
$bird2->weight = 0.9 . ' KG';     
$bird2->color = 'Red';
$bird2->kind = 'kanary';
$bird2->kind2 = 'kanary2';
echo $bird2->weight."<br>";                           
// #############################################################################
// __clone()
echo '<hr>';
class Bird3 
{ 
  public $weight;  
  public $color;
  public function __construct($c,$w) {
    $this->color=$c;
    $this->weight=$w;
  }
  public function __clone(){
    $this->color = clone $this->color;
  }
}  

$main = new Bird3('red','1.5');
$copy = clone $main;      // copy by reference if we don't use (clone)    
$main->color = 'blue' ;
$copy->color = 'black' ;
print_r($main);
echo '<br>';
print_r($copy);