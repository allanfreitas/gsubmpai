<?php



if (count($argv) > 1)
{

  require 'kmodels/User.php';
  $username = $argv[1];
  $user = new User($username);
  var_dump($user);
  echo('Stop');exit;
}else{
  die('No Parameters');
}
//
