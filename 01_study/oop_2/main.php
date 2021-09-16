<?php

require_once __DIR__ . '/User.php';

$bob = new User('bob', 21);
echo $bob->selfIntroduction();

$tom = new User('tom', 22);
echo $tom->selfIntroduction();

$ken = new User('ken', 23);
echo $ken->selfIntroduction();