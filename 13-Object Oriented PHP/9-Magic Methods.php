<?php
/**
 * Magic methods :-
-- Methods with special name start with double underscore  (__) and are called when the corresponding event
*-- Kinds of Magic methods --*

1. Constructor -
- __construct() is a method called when object created
- can be  used to initialize an object, set default values for properties etc.

2. Destructor - 
- __destruct() is called just before an object is destroyed

3. Getter/Setter -  
- Used to get or set the value of private/protected variables from outside the class
- If no arguments provided in function then it's known as a "Getter" otherwise it's known as a "setter".

4. Callback functions - 
- Called when certain operations occur like array_walk(), sort(), shuffle() etc.

5. Operator Overloading -  
- Allows user defined classes to use operators overloading which allows objects to behave like builtin data types.
- Allows user defined classes to use operators overloading which allows objects of that class to perform arithmetic operations using standard PHP operators.

6. String conversion -  
- __toString() returns string representation of an object when echoed directly.

7. Cloning -  
- __clone() is called whenever cloning occurs. It allows you to perform any clean up operation before cloning takes place.
- __clone() is called when cloning an object. This can be useful if you want to perform some action whenever an object is copied.

8.  Serialization & Unserialization -
- serialize() converts an object into a string so that it can be stored in a file or database.
- unserialize() does the reverse operation and rebuilds the original object from the serialized data.

9. Dynamic methods - 
- When PHP interpreter doesn’t find a method in the class it looks for dynamic methods.

10. Call -
- __call() Called when invoking function not accessible or not found
- Accept 2 params [ $methodName , $params/$arguments ]
- The call magic method allows objects to handle calls to methods 
which do not exist in that particular object static methods using :: operator 

 */

// __construct()
class Dog 
{
    public function __construct()
    {
      echo "Dog barks\n";
    }
}

$dog = new Dog(); // Outputs: Dog barks with out call method

// __call()

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