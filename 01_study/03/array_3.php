<?php

$profile = [
    'Bob',
    21,
    [
        'Tom',
        'Ken',
        'John'
    ]
];

var_dump($profile); // 全ての要素を探ってくれる

echo '<hr>';

print_r($profile); // キーが2のデータはArrayとだけ表示される