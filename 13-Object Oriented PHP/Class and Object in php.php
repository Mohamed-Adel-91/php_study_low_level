<?php
/**
 * Class & object
 * ------------------------------
  - Class is a blueprint for creating objects.
  - Object is an instance of a class.
  - A class defines the properties and methods of an object.
  - An object is a collection of properties and methods.
  - Class has  a property called $this which refers to itself.
  
 * - Variable Inside Class = [property]
 * - Variable Outside Class = [variable]
 * - Function Inside Class = [method]
 * - Function Outside Class = [function]
  
  - [ class ]  = Class keyword
  - [ new ] = New keyword creates a new object from a class
  - [ public , private , protected ] are access modifiers = Visibility Markers
  - [ -> ] =  Object Arrow operator used to access properties or call methods in an object
  - [ $this -> ] = Used inside a method to refer to the current object properties
  - [ self ] =  Used inside a static method to refer to the class name & constant not the current object
  - [ :: ]  = Scope Resolution Operator, Static Operator, used to access static properties/methods
  -> maybe we have an error like this [ paamayim Nekudotayim ] it's hebrew word = [ Double Colon ]
  - Methods are defined inside curly braces {}
  
 * -- self vs this --
 * self :- 
  - Refer to Current Class
  - Access static members  (Properties / Methods)
  - Can be accessed without creating an object
  - we don't use [ $ ] 
 * this :-
  - Refer to Current Object
  - Access non static members   (Properties / Methods)
  - Must use [ $ ] to access them
 */

// Class definition and object creation

// this is class
class appleDevice {
  // ---- Property or Attribute ----
  public $model = 'Iphone-x'; // = means default value
  public $ram = '4GB'; // = means default value
  public $space = '512GB'; // = means default value
  public $ownerName;
  private $color = 'silver';   
  // Private means accessible only within the class, not outside it.
  protected $osVersion = 'iOS 13';
  // Protected means accessible within the class and its child classes (inheritance)    

  // ---- Constant ----
  const CAMERA_MP = "13 MP";
  const BATTERY_CAPACITY ="5000mAh";
  const WEIGHT="68gms";
  const COLOR_AVAILABLE=["Silver","Gold","Space Gray"];
  const MODEL_NAME='Apple IPhone X' ;
  const PRODUCT_TYPE='Smart Phone';
  const SCREEN_SIZE='5.8 Inch';
  const CPU='A14';
  const MIN_CHAR = 3;

  // ---- Methods ----
  public function homePress($param){
    echo "Home $param button pressed!<br>";
  }

  public function getSpecification($param){
    echo "The device model is: ". $this->model . "<br>" ;
    if ($param == 'RAM'){
      echo "RAM: ". $this->ram . "<br>";
    } elseif ($param == 'Space'){
      echo "Storage Space: ". $this->space ."<br>";
    } else {
      return false;
    }
  }

  public function getOwnerName($owner){
    $this -> ownerName = $owner;
    echo "The Owner of the Device $owner" . "<br>";
    if (strlen($this -> ownerName)> self::MIN_CHAR){
      return $this -> ownerName;
    } else {
      return "Invalid Owner Name Can't be less than " . self::MIN_CHAR . "<br>";
    }
  }
}

// this is object 
// Accessing properties (fields) in an object using dot notation
$Iphone6 = new appleDevice(); // $Iphone6 is an object, created from appleDevice class
$Iphone6->model = 'iPhone 6';
$Iphone6->ram = '2GB';
$Iphone6->space = '16GB';
$Iphone6->ownerName = 'Mohamed Adel';
$Iphone6->homePress('Iphone6');
$Iphone6->getSpecification('Space');
echo $Iphone6->getOwnerName("Mohamed Adel Taha") . '<br>';
// we can print constant like this
echo appleDevice::CPU . '<br>';
echo $Iphone6::CPU . '<br>';
echo '<hr>';
// $Iphone6->color = 'silver';
// $Iphone6->osVersion = '8.3';
echo "Model: ". $Iphone6->model . "<br>";
echo "RAM: ". $Iphone6->ram . "<br>";
echo "Storage Space: ". $Iphone6->space ."<br>";
// echo "Color: ". $Iphone6->color ."<br>" - it will give error because its private
echo "<hr>";
echo get_class($Iphone6); // returns "appleDevice"
echo '<pre>';
var_dump($Iphone6);
echo '</pre>';
//-------------------------------------- new object -------------------------------------
$Iphone7 = new appleDevice(); // $Iphone7 is an object, created from appleDevice class
$Iphone7->model = 'iPhone 7';
$Iphone7->ram = '4GB';
$Iphone7->space = '128GB';
// $Iphone7->color = 'gold';
// $Iphone7->osVersion = '9.0';
echo "<hr>";
echo "Model: ". $Iphone7->model . "<br>";
echo "RAM: ". $Iphone7->ram . "<br>";
echo "Storage Space: ". $Iphone7->space ."<br>";
// echo "In the show function of Iphone7 class <br>". $Iphone7->show() ."<br>";
echo "<hr>";
echo get_class($Iphone7); // returns "appleDevice"
echo '<pre>';
var_dump($Iphone7);
echo '</pre>';
//-------------------------------------- new object -------------------------------------
$Iphone = new appleDevice(); // $Iphone is an object, created from appleDevice class
echo "<hr>";
echo "Model: ". $Iphone->model . "<br>";
echo "RAM: ". $Iphone->ram . "<br>";
echo "Storage Space: ". $Iphone->space ."<br>";
echo "<hr>";
echo get_class($Iphone); // returns "appleDevice"
echo '<pre>';
var_dump($Iphone);
echo '</pre>';