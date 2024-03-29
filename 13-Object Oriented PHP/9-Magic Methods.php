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

 */

class Dog 
{
    public function __construct()
    {
      echo "Dog barks\n";
    }
}

$animal = new Dog(); // Outputs: Dog barks with out call method