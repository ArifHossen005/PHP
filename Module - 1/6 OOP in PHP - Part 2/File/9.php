<?php
interface Flyable
{
          public function fly();
}

interface Swimmable
{
          public function swim();
}

interface Walkable
{
          public function walk();
}

class Fish implements Swimmable
{
          public function swim()
          {
                    echo "The fish is swimming.\n";
          }
}

class Cat implements Walkable
{
          public function walk()
          {
                    echo "The cat is walking.\n";
          }
}

class Bird implements Flyable, Walkable
{
          public function fly()
          {
                    echo "The bird is flying.\n";
          }

          public function walk()
          {
                    echo "The bird is walking.\n";
          }
}

class Human implements Walkable, Swimmable
{
          public function walk()
          {
                    echo "The human is walking.\n";
          }

          public function swim()
          {
                    echo "The human is swimming.\n";
          }
}


$john = new Human();
$john = new Human();
$meow = new Cat();
$bird = new Bird();
$fish = new Fish();


function runningCompetitions(Walkable $creature)
{
          echo "Running Competition:\n";
}

runningCompetitions($john);
runningCompetitions($meow);
runningCompetitions($bird);
