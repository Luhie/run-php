<?php
class Animal{
  function run(){
    print('running...');

  
  }
  function breathe(){
    print('breathing..');
  }
}

class Human extends Animal{
  function think(){
    print('thinking...');
  }
  function talk(){
    print('talking...');
  }

}
$ani = new Animal();
$ani->run();
$ani->breathe();


$human = new Human();
$human->talk();
$human->run();


?>