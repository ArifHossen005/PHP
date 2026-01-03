<?php

$students = [
    ["name" => "Alice", "age" => 20, "city" => "Dhaka"],
    ["name" => "Bob", "age" => 22, "city" => "Chittagong"],
    ["name" => "Charlie", "age" => 21, "city" => "Khulna"]
];

          foreach($students as $student){
                    foreach($student as $key => $value){
                              echo $key . ": " . $value . "\n";
                    }
          }
