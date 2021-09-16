<?php

 require_once __DIR__ . '/User.php';
  
  $user = new User();

// var_dump($user);
// echo $user->name.'<br>';
// echo $user->age.'<br>';
// $user->name='Tom'.'<br>';
// echo $user->name.'<br>';

echo $user->greet('Tom');
echo $user->