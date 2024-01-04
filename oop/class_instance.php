<?php
class MyFileObejct{
  function isFile(){
    return is_file($this->filename);
  }
}


$file =  new MyFileObejct();
$file->filename = 'data.txt';
var_dump($file->isFile());
var_dump($file->filename);

$file2 =  new MyFileObejct();
$file2->filename = 'data2.txt';
var_dump($file2->isFile());
var_dump($file2->filename);




/*
MyFileObject : Class
$file, $file2 : Instance
isFile : Method, behavior
$this -> filename : Instance variable/field, property / status
*/
?>