<?php 
interface ContractInterface
{
  public function promiseMethod(array $param):int;
}
interface ContractInterface2
{
  public function promiseMethod2(array $param):int;
}
class ConcreateClass implements ContractInterface, ContractInterface2
{
  public function promiseMethod(array $param):int
  {
    return 10;
  }
  public function promiseMethod2(array $param):int
  {
    return 10;
  }
}
$obj = new ConcreateClass();
echo $obj->promiseMethod([1,2]);

?>