<?php


$myVar = '';

if (count($argv) > 1)
{
  $name = $argv[1];

  var_dump($name);
  echo('Stop');exit;
}else{
  die('No Parameters');
}
//
