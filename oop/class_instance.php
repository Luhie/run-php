<?php
class MyFileObejct{
  function __construct($fname){
    $this->file_name = $fname;
  }
  // public $file_name;
  function isFile(){
    return is_file($this->file_name);
  }
}


$file =  new MyFileObejct('data.txt');
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