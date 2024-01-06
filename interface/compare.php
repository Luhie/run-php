<?php
interface ConstractInterface
{
  public function compare(string $str1, string $str2):bool;
}
class Concreate implements ConstractInterface
{
  public function compare(string $str1, string $str2):bool
  {
    if($str1 === $str2)
      return true;
    else
      return false;
  }
}
class Dummy implements ConstractInterface
{
  public function compare(string $str1, string $str2):bool
  {
    return true;
  }
}

// $obj = new Dummy();
$obj = new Concreate();
if($obj->compare('test','test'))
{
  echo '<h1>same</h1>';

}
else
{
  echo '<h1>different</h1>';

}


?>