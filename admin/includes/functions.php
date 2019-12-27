<?php
function __autoload($class){
$class=strtolower($class);
$the_path="includes/{$class}.php";
if(file_exists($the_path)){
  require_once($the_path);
}else{
  die("这个文件名字 {$class}.php 没有找到 ");
}

}




?>