<?php
class Person
{
          public $fname;
          public $lname;
          public $age;
          public $email;
          public $phone;


          public function __construct($firstname, $lastname, $age)
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

$arif = new Person("Arif", "Khan", 25);
$sohag = new Person("Sohag", "Hossain", 30);

echo $arif->fullName();
echo PHP_EOL;
echo $sohag->fullName();
echo PHP_EOL;
echo $arif->getAge();
echo PHP_EOL;
echo $sohag->getAge();



//set value access
$arif->setAge(26);
$sohag->setAge(31);
