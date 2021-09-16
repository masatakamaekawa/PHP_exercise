<?php

$fruits = ['banana', 'apple', 'melon','cherry'];

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . '<br>';
}

echo '<hr>';

$nums = [];

for ($j = 1; $j <= 10; $j++) {
    $nums[] = $j;
}
var_dump($nums);