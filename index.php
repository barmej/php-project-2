<?php

include_once 'classes/Enemy.php';
include_once 'classes/Hero.php';

$hero = new Hero('Mohammed', 20, 10);
$enemy = new Enemy("Ahmed", 10, 10, false);

echo $hero->fight($enemy);

?>

