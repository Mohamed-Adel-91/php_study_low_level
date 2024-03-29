<?php
/**
 * Inheritance  is a fundamental concept in object-oriented programming
-- first class called -> super class
-- Inheritance class called ->  sub class or derived class or subclass
 */

class Apple_phone
{
    public $ram = "2GB";
    public $version = "12IOS";
    public $space = "128G";
    public $name = "phone";
    private $lock;
    public function changeSpec(string $ra, string $ver, string $sp)
    {
        $this->ram = $ra;
        $this->version = $ver;
        $this->space = $sp;
    }

    public function changeLock($lo)
    {
        $this->lock = sha1($lo);
        if ($this->lock = sha1($lo)) {
            echo 'Apple Device is locked<br>';
        } else {
            echo 'Apple Device is unlocked<br>';
        };
    }

    final public function sayHello($n)
    {
        $this->name = $n;
        echo 'Welcome To ' . $n . '<br>';
    }
}

$iphoneX = new Apple_phone();
$iphoneX->changeSpec("4GB", "13.5", "512GB");
$iphoneX->changeLock('password') . '<br>';
$iphoneX->sayHello('iphoneX') . '<br>';

echo 'Ram: ' . $iphoneX->ram . '<br>'; // accessible through the dot notation (public property)
echo 'Version: ' . $iphoneX->version . '<br>'; // accessible through the arrow notation ($obj->property)
echo 'Space: ' . $iphoneX->space . '<br>';
// Trying to access private property will result in an error
// we can only change private property in method of class not outside it in object
// echo 'Lock: ' . $iphoneX->lock . '<br>';  -> error

echo '<hr>';
echo '<pre>';
var_dump($iphoneX);
echo '</pre>';

// ---------------------------------------------------

class Sony_phone extends Apple_phone
{
    //-- we can delete this property because we extends it from appel_phone class
    // public $ram = "2GB";
    // public $version = "12IOS";
    // public $space = "128G";
    // private $lock;
    public $camera = "10MP"; // this is new one in new class

    //-- we change the methods name to can be add new arg in the method
    public function changeSpec2(string $ra, string $ver, string $sp, string $cam)
    {
        $this->ram = $ra;
        $this->version = $ver;
        $this->space = $sp;
        $this->camera = $cam;
    }

    //-- we can delete this method because we extends it from appel_phone class
    // public function changeLock($lo)
    // {
    //     $this->lock = sha1($lo);
    //     if ($this->lock = sha1($lo)) {
    //         echo 'sony Device is locked<br>';
    //     } else {
    //         echo 'sony Device is unlocked<br>';
    //     };
    // }

    //-- if we add final before  method then we can't override this method in child class
    // final public function sayHello($n)
    // {
    //     $this->name = $n;
    //     echo 'Welcome To phone named :- ' . $n . '<br>';
    // }
}

$sony = new Sony_phone();
$sony->changeSpec2("4GB", "13.5", "512GB", "15MP");
$sony->changeLock('password') . '<br>';
$sony->sayHello('sony') . '<br>';

echo 'Ram: ' . $sony->ram . '<br>'; // accessible through the dot notation (public property)
echo 'Version: ' . $sony->version . '<br>'; // accessible through the arrow notation ($obj->property)
echo 'Space: ' . $sony->space . '<br>';
echo 'Camera: ' . $sony->camera . '<br>';
echo '<hr>';
echo '<pre>';
var_dump($sony);
echo '</pre>';