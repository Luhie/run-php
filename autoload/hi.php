<?php

namespace greeting\en;
class Hi{
  function __construct(){
    echo '<h1>Hi</h1>';
  }
};

namespace greeting\ko;
class Hi{
  function __construct(){
    echo '<h1>안녕</h1>';
  }
};
// 1.
// new \greeting\en\Hi();
// new \greeting\ko\Hi();
// 2. 
// use \greeting\en, \greeting\ko;
// new en\Hi();
// new ko\Hi();
use \greeting\en\Hi as HiEn;
use \greeting\ko\Hi as HiKo;
new HiEn();
new HiKo();
?>