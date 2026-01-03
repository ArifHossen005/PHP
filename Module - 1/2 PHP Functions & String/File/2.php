<?php
declare(strict_types=1); // strict type checking as if we misstype the argument types, PHP will throw a TypeError
function add(int $a, float $b,  float $c=0) {  // default parameter and type hinting
    return $a + $b + $c;
}

function multiplication(int|float $a, int|float $b, int|float $c) {   //multiple type hinting
    return $a * $b * $c;
}


function myName(?string $name) {   // null safe
  echo "My name is " . $name;
}

echo add(10,20);
echo PHP_EOL;
echo add(10,20,30);
echo PHP_EOL;
echo multiplication(10,20.99,30);
echo PHP_EOL;
echo myName("John");
echo PHP_EOL;
echo myName(null);