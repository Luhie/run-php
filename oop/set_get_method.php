<?php
class Person{
  private $name;
  function sayHi(){
    print("Hi, I'm {$this->name}.");
  }
  function setName($_name){
    // if(empty($_name)){
    //   die('I need name');
    // }
    $this->ifEmptyDie($_name);
    $this->name = $_name;
  }
  function getName(){
    return $this->name;
  }

  private function ifEmptyDie($value){
    if(empty($value)){
      die('I need name');
    }
  }

}
$nana = new Person();
// $nana->name = 'nana';
$nana->setName('nana');
$nana->sayHi();
// print($nana->name);
print($nana->getName());

?>