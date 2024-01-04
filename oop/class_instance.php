<?php
class MyFileObejct{
  function isFile(){
    return is_file('data.txt');
  }
}


$file =  new MyFileObejct();
var_dump($file->isFile());
?>