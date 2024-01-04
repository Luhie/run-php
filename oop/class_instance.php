<?php
class MyFileObejct{
  public $file_name;
  function isFile(){
    return is_file($this->file_name);
  }
}


$file =  new MyFileObejct();
$file->file_name = 'data.txt';
var_dump($file->isFile());
var_dump($file->file_name);

$file2 =  new MyFileObejct();
$file2->file_name = 'data2.txt';
var_dump($file2->isFile());
var_dump($file2->file_name);




/*
MyFileObject : Class
$file, $file2 : Instance
isFile : Method, behavior
$this -> filename : Instance variable/field, property / status
*/
?>