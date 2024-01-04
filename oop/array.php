<h1>Fucntion Style</h1>
<?php 
$function_data = array('a','b','c');
array_push($function_data, 'd');
foreach($function_data as $item){
  echo $item.'<br>';
}
var_dump(count($function_data));

?>
<h1>Obejct Style</h1>
<?php
$object_data = new ArrayObject(array('a','b','c'));
$object_data -> append('d');
foreach($object_data as $item){
  echo $item.'<br>';
}
var_dump($object_data -> count());



?>