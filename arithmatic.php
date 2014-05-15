<?php


function add($a, $b) {
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b) {
    echo $a - $b . PHP_EOL;
}

function multiply($a, $b) {
    echo $a * $b . PHP_EOL;
}

function divide($a, $b) {
    echo $a / $b . PHP_EOL;
}

function remain($a,$b) {
	echo $a % $b . PHP_EOL;
}

add(1,1);
subtract(10,5);
multiply(4,3);
divide(16,4);
remain(15,3);
?>