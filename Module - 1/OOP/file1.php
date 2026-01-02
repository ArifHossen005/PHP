<?php

class Person {
    public $name;
    public $age;

    public function Myself(){
        $myself = "My name is " . $this->name . " and I am " . $this->age . " years old.";
        return $myself;
    }

}

$arif = new Person();
$arif->name = "Arif";
$arif->age = 25;

echo "Name: " . $arif->name . "\n";
echo "Age: " . $arif->age . "\n";

echo $arif->Myself();
