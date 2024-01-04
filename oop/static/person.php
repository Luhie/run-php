<?php
class Person{
  private $count = 0;
  private $name;
  function __construct($name){
    $this->name = $name;
    $this->count = $this->count + 1;
  }
  function enter(){
    echo "<h1>Enter ".$this->name." {$this->count}th</h1>";
  }

}

$p1 = new Person('nana');
$p1->enter();

$p2 = new Person('bbo');
$p2->enter();

$p3 = new Person('bora');
$p3->enter();

$p4 = new Person('2b');
$p4->enter();

?>