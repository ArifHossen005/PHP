<?php 
Class Car{
          public $name;
          public $model;
          public $price;


public function __construct($Fullname, $Carmodel, $Carprice) {
              $this->name = $Fullname;
              $this->model = $Carmodel;
              $this->price = $Carprice;
}

public function Carinfo(){
          $Carinfo = "\nThe car name is $this->name and the car model is $this->model and the price is $this->price \n";
          return $Carinfo;
}
}

$carObject  =  new Car("Toyota", "Camry", 30000);

echo $carObject->Carinfo();
