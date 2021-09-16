<?php

// date()関数を使ってみよう
// 引数:   'Y年m月d日 H時i分s秒'
// 返り値: '2015年12月13日 16時15分30秒'
$date = date('Y年m月d日 H時i分s秒');

echo '今現在の時刻は、' . $date . 'です<br>';

// time()関数を使ってみる
// 引数:   なし
// 返り値: UNIXタイムスタンプ(1970年1月1日00:00:00からの経過秒数)
echo time();