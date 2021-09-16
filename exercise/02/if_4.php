<?php

$score_1 = 60;
$score_2 = 60;

if ($score_1 >= 60 && $score_2 >= 60) {
    echo '合格';
} elseif ($score_1 >= 50 || $score_2 >= 50){
    echo '再試験';
} else {
    echo '不合格';
}