<h1>Fucntion</h1>
<?php 
// 일반적 파일이라면 true를 리턴한다. 
var_dump(is_file('data.txt'));
var_dump(is_dir('data.txt'));
var_dump(file_get_contents('data.txt'));
file_put_contents('data.txt', rand(1,100));
// 파일을 제어할 수 있는 함수
// 함수를 통한 파일 핸들링
// procedural
?>
<h1>Object</h1>
<?php
//객체 리턴
$file = new SplFileObject('data.txt', 'r');
var_dump($file -> isFile());
var_dump($file -> isDir());
var_dump($file -> fread($file -> getSize()));
// $written = $file->fwrite(rand(1,100));
// echo "Wrote $written bytes to file";

/********************* 
SplFileObject : class
$file : instance
isFIle, isDir, fread : Method
data.txt : state
*************************/
?>