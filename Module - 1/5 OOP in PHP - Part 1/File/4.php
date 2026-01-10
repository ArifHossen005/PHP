<?php
//property promotion 
class Person
{
          // public $fname;
          // public $lname;
          // public $age;

          // public function __construct($firstname, $lastname, $age)
          // {
          //           $this->fname = $firstname;
          //           $this->lname = $lastname;
          //           $this->age = $age;
          // }


          function __construct(public $fname, public $lname, public $age = 0) {}

          public function fullName()
          {
                    return $this->fname . " " . $this->lname;
          }

          public function getAge()
          {
                    return $this->age;
          }
}

$arif = new Person("Arif", "Hossen", 70);
echo $arif->fullName();
echo PHP_EOL;

echo $arif->getAge();
