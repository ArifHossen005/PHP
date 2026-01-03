<?php
function add($a,$b)
{
          echo $a + $b;
}
function sub($a,$b)
{
          echo $a - $b;
}
function mul($a,$b)
{
          echo $a * $b;
}
function div($a,$b)
{
          echo $a / $b;
}

function calculator($callback1,$callback2,$callback3,$callback4){
          $callback1(10,8);
          echo PHP_EOL;
          $callback2(10,2);
          echo PHP_EOL;
          $callback3(10,2);
          echo PHP_EOL;
          $callback4(10,2);
}

calculator('add','sub','mul','div');//callback function 
