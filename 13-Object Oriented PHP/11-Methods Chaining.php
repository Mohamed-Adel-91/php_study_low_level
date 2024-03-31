<?php
/**
 * Method chining 
  - when a classes methods return $this keyword , they can be chained together 
 */

class Telephone
{
  public $name;
  public $mail;

  public function power(){
    echo 'power...<br>';
    return $this;
  }
  public function restart(){
    echo 'restart...<br>';
    return $this;
  }
  public function open(){
    echo 'open...<br>';
    return $this;
  }
}

$telephone = new Telephone();
$telephone->power();
$telephone->restart();
$telephone->open();

// OR

$telephone->power()->open()->restart();

print_r($telephone);