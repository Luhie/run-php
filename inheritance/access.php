<?php
class ParentCLass{
  public $_public = '<h1>public</h1>';
  protected $_protected = '<h1>protected</h1>';
  private $_private = '<h1>pravate</h1>';
}

class ChildClass extends ParentClass{
  function callPublic(){
    echo $this->_public;
  }
  function callProtected(){
    echo $this->_protected;
  }
  function callPrivate(){
    echo $this->_private;
  }
}

$obj = new ChildClass();
echo $obj->_public;
echo $obj->_private;
// echo $obj->_protected;

$obj->callPublic();
$obj->callPrivate();
$obj->callProtected();


?>