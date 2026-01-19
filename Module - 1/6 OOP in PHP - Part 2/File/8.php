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

          public function run()
          {
                    echo "The bird is swimming.\n";
          }
}
