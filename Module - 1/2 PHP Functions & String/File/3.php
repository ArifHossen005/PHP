<?php

function add(...$numbers): float {  // variadic function & array 
    return array_sum($numbers);
}
 echo add(10, 20);

(function (){    //anonymous function
      echo "My name is Arif";
})();

$annonymous = function($name) {   //anonymous function with parameter
      echo "My name is " . $name;
};


fn($name) => "My name is " . $name;
$numbers = [1, 2, 3, 4];

$result = array_map(fn ($n) => $n * 2, $numbers);

print_r($result);

echo PHP_EOL;
$annonymous("John");
