<?php
/**
 *----------------
 * Polymorphism :-
 *----------------
## Meaning of polymorphism ?
----------------------------
- describe a pattern in oop in which classes have different functionality while sharing common interface
but can be used interchangeably.
- the beauty of polymorphism is that the code working with the different classes doesn't need to know
which class it is using since they are all used the same way
- Making PHP more flexible and easier to work with and maintainable through implementing
& depend on  interfaces rather than concrete implementations. (via an interface).
- A real world example or analogy for polymorphism is a button ,
Every one know what a button does but how it dose something (via an interface).
- * CUT * have more than one meaning with ( Surgeon , Barber , Actor ) but it's one word
 *---------------------------------------------------------------------------------------------------------
- have methods with body code like abstract
 *---------------------------
 * ## Types of polymorphism :
 *---------------------------
1. Compile time polymorphism / static binding / early binding
2. Run time polymorphism / dynamic binding / late binding
3. Method overloading / operator overloading
4. Method overriding / function overriding
5. Constructor overriding
6. Interface based polymorphism
 */

interface mobile
{
    public function pressHome();
}

class phone implements mobile
{
    public $name;
    public function pressHome()
    {
        echo "Pressing Home on {$this->name}'s Phone";
    }
}
$phone = new phone();
$phone->name = "samsung";
$phone->pressHome();
class sony implements mobile
{
    public $name;
    public function pressHome()
    {
        echo "Pressing Home on {$this->name}'s Phone";
    }
}
$sony = new sony();
$sony->name = "sony";
$sony->pressHome();

/**
 * 1- Compile time polymorphism / static binding / early binding:
Method Overloading is not directly supported in PHP,.
but you can achieve similar behavior using magic methods like __call() or __callStatic().
 */
class MathOperations
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function addThree($a, $b, $c)
    {
        return $a + $b + $c;
    }
}

$math = new MathOperations();
echo $math->add(2, 3); // Outputs: 5
echo $math->addThree(2, 3, 4); // Outputs: 9
//---------------------------------------------------------------------------------------------
/**
 * 2-Run time polymorphism / dynamic binding / late binding:
Method Overriding
 */
class Animal
{
    public function sound()
    {
        echo "Animal makes a sound\n";
    }
}

class Dog extends Animal
{
    public function sound()
    {
        echo "Dog barks\n";
    }
}

$animal = new Dog();
$animal->sound(); // Outputs: Dog barks
//---------------------------------------------------------------------------------------------
/**
 * 3-Method overloading / operator overloading:
PHP doesn't support method overloading directly like some other languages do.
However, you can achieve similar functionality using
variable-length argument lists or default parameter values.
 */
//---------------------------------------------------------------------------------------------
/**
 * 4-Method overriding / function overriding:
Method Overriding
 */
class Animal2
{
    public function sound()
    {
        echo "Animal makes a sound\n";
    }
}

class Dog2 extends Animal2
{
    public function sound()
    {
        echo "Dog barks\n";
    }
}

$animal2 = new Dog2();
$animal2->sound(); // Outputs: Dog barks
//---------------------------------------------------------------------------------------------
/**
 * 5-Constructor overriding:
Constructors in PHP cannot be overridden because PHP doesn't support inheritance of constructors.
However, child classes can call parent constructors using parent::__construct().
 */
//---------------------------------------------------------------------------------------------
/**
 * 6-Interface based polymorphism:
Interface Implementation
 */
interface Shape
{
    public function draw();
}

class Circle implements Shape
{
    public function draw()
    {
        echo "Drawing Circle\n";
    }
}

class Rectangle implements Shape
{
    public function draw()
    {
        echo "Drawing Rectangle\n";
    }
}

$circle = new Circle();
$circle->draw(); // Outputs: Drawing Circle

$rectangle = new Rectangle();
$rectangle->draw(); // Outputs: Drawing Rectangle
