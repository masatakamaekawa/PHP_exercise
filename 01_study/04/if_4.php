<?php

$age = 20;

if ($age > 20) {
    //条件が真だった時の処理
    echo 'あなたは成人です';
    //1つ目の条件が偽で｡2つ目の条件が真の時
} elseif ($age === 20) {
    echo '成人式ですね';
} elseif ($age === 19) {
    echo 'もう少しで成人式ですね';
    //条件が偽
} else {
    echo 'あなたは未成年です';
}