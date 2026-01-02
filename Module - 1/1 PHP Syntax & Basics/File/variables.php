<?php 
define("pi", 3.14); // echo without it $ sign
const PI = 3.14; // echo without it $ sign

$title = "My First PHP Page";
$body = "Hello, World!"; // string
$age = 25;// int 
$isStudent = true; // boolean
$siblings = null; // null
$arrayExample = array("apple", "banana", "cherry"); // array

print_r($arrayExample);

foreach ($arrayExample as $fruit) {
    echo $fruit . "\n";
}
echo pi;
echo PHP_EOL;
echo PI;