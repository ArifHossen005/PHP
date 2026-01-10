<?php
class Person
{
          public $fname;
          public $lname;
          public $age;
          public function fullName()
          {
                    $fullName  = $this->fname . " " . $this->lname;
                    return $fullName;
          }
}

$arif = new Person();

//set values
$arif->fname = "Arif";
$arif->lname = "Khan";
$arif->age = 25;

//get values
echo "Name: " . $arif->fname . "\n";
echo "Last Name: " . $arif->lname . "\n";
echo "Age: " . $arif->age . "\n";



echo $arif->fullName();
