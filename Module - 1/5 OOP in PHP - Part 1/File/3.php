<?php
class Person
{
          public $fname;
          public $lname;
          public $age;
          public $email;
          public $phone;


          public function __construct($firstname, $lastname, $age = 0)
          {
                    $this->fname = $firstname;
                    $this->lname = $lastname;
                    $this->age = $age;
          }

          public function fullName()
          {
                    return $this->fname . " " . $this->lname;
          }

          public function getAge()
          {
                    return $this->age;
          }


          public function setAge($a)
          {
                    $this->age = $a;
                    echo "\n$this->age";
          }
}

$arif = new Person("Arif", "Hossen");
echo $arif->fullName();
echo PHP_EOL;

echo $arif->getAge();
