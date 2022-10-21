<?php

function myAutoLoader($class_name){
  $path = "../classes/";
  $extension = ".class.php";
  $fullPath = $path . $class_name . $extension;
/*
  if (!file_exits($fullPath)) {
    return false;
  }  */
    include $fullPath;
}


spl_autoload_register("myAutoLoader");
