<?php
class MyFileObejct{
  private $file_name;
  function __construct($fname){
    $this->file_name = $fname;
    if(!file_exists($this->file_name)){
      die('There is no file'.$this->file_name);
    }
  }
  // public $file_name;
  function isFile(){
    return is_file($this->file_name);
  }
}


$file =  new MyFileObejct('data.txt');
// $file =  new MyFileObejct();
// $file->file_name = 'data.txt';
var_dump($file->isFile());
var_dump($file->file_name);



/*
MyFileObject : Class
$file, $file2 : Instance
isFile : Method, behavior
$this -> filename : Instance variable/field, property / status
*/
?>