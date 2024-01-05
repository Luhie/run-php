<?php
// require_once __DIR__.'/greeting.php';
// require_once 'greeting.php';

function autoloader($path){
  $path = $path.'.php';
  var_dump("path : {$path}");
  require_once $path;
}
spl_autoload_register('autoloader');
echo 'main : ';

new Hi();
new Bye();



?>