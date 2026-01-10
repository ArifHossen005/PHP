<?php
$person = [
          'name' => 'John Doe',
          'age' => 30,
          'email' => 'john.doe@example.com'
];

$jsonData = json_encode($person);
echo $jsonData;

$newPerson = json_decode($jsonData, true);
print_r($newPerson);
