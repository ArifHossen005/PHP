<?php 

$array = [4, 1, 3, 2, 5,8,7];
$array1 = [4, 1, 3, 2,5,9,0];

$student = [
    "name" => "John",
    "age" => 25,
    "city" => "New York"
];
$arraySum = array_sum($array);

echo "The sum of the array is: " . $arraySum;
echo PHP_EOL;

$arrayProduct = array_product($array);
echo "The product of the array is: " . $arrayProduct;
echo PHP_EOL;

$arraySorted = $array;
sort($arraySorted);
echo "The sorted array is: " . implode(", ", $arraySorted);
echo PHP_EOL;

$reverseSorted = $array;
rsort($reverseSorted);
echo "The reverse sorted array is: " . implode(", ", $reverseSorted);
echo PHP_EOL;


$arrayDiff = array_diff($array, $array1);
echo "The difference between the two arrays is: " . implode(", ", $arrayDiff);            
echo PHP_EOL;

$keys = array_keys($student);
echo "The keys of the array are: " . implode(", ", $keys);
echo PHP_EOL;


$values = array_values($student);
echo "The values of the array are: " . implode(", ", $values);
echo PHP_EOL;

$pushedArray = $array;
array_push($pushedArray, 6);
echo "The array after pushing a new value is: " . implode(", ", $pushedArray);
echo PHP_EOL;


$arrayCount = count($array);
echo "The count of the array is: " . $arrayCount;
echo PHP_EOL;


$arrayMerged = array_merge($array, $array1);
echo "The merged array is: " . implode(", ", $arrayMerged);
echo PHP_EOL;


$arrayPop = array_pop($array);
echo "The array after popping a value is: " . implode(", ", $array);
echo PHP_EOL;

$arraySlice = array_slice($array, 1, 3);
echo "The sliced array is: " . implode(", ", $arraySlice);
echo PHP_EOL;
