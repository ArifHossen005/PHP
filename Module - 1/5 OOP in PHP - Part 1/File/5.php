<?php
class Person
{
          public $fname;
          public $lname;
          public $age;
          private $email;
          public $phone;


          public function __construct($firstname, $lastname, $age, $email)
          {
                    $this->fname = $firstname;
                    $this->lname = $lastname;
                    $this->age = $age;
                    $this->email = $email;
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

          function getEmail()
          {
                    return $this->email;
          }
}

$arif = new Person("Arif", "Khan", 25, "arif@example.com");

echo $arif->getEmail();
