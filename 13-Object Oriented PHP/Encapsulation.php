<?php

/*
Encapsulation is a fundamental concept in object-oriented programming.
It refers to the practice of hiding the internal state and implementation details of an object from the outside world
 */

class Apple
{
    public $ram = "2GB";
    public $version = "12IOS";
    public $space = "128G";
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
            echo 'Device is locked<br>';
        } else {
            echo 'Device is unlocked<br>';
        };
    }
}

$iphoneX = new Apple();
$iphoneX->changeSpec("4GB", "13.5", "512GB");
$iphoneX->changeLock('password') . '<br>';

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
