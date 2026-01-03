<?php

$flowers = ["Rose", "Tulip", "Lily", "Daffodil", "Sunflower","Orchid"];
$studentNames = array("Alice", "Bob", "Charlie");
$indexAssociative = array(
    "name" => "John",
    "age" => 25,
    "city" => "New York"
);



$countries = [
    [
        "country" => "USA",
        "city" => "New York",
        "population" => 8419600,
        "continent" => "North America",
        "languages" => ["English", "Spanish"]
    ],
    [
        "country" => "Canada",
        "city" => "Toronto",
        "population" => 2930000,
        "continent" => "North America",
        "languages" => ["English", "French"]
    ],
    [
        "country" => "UK",
        "city" => "London",
        "population" => 8982000,
        "continent" => "Europe",
        "languages" => ["English"]
    ],
    [
        "country" => "Japan",
        "city" => "Tokyo",
        "population" => 13929000,
        "continent" => "Asia",
        "languages" => ["Japanese"]
    ],
    [
        "country" => "Australia",
        "city" => "Sydney",
        "population" => 5312000,
        "continent" => "Australia",
        "languages" => ["English"]
    ],
    [
        "country" => "India",
        "city" => "Mumbai",
        "population" => 20411000,
        "continent" => "Asia",
        "languages" => ["Hindi", "English", "Marathi"]
    ],
    [
        "country" => "Germany",
        "city" => "Berlin",
        "population" => 3769000,
        "continent" => "Europe",
        "languages" => ["German"]
    ],
    [
        "country" => "Brazil",
        "city" => "São Paulo",
        "population" => 12330000,
        "continent" => "South America",
        "languages" => ["Portuguese"]
    ],
    [
        "country" => "Egypt",
        "city" => "Cairo",
        "population" => 10230000,
        "continent" => "Africa",
        "languages" => ["Arabic"]
    ],
    [
        "country" => "Russia",
        "city" => "Moscow",
        "population" => 11920000,
        "continent" => "Europe/Asia",
        "languages" => ["Russian"]
    ]
];



// print_r($flowers);
// print_r($studentNames);

// $decode =  json_encode($flowers);
//  $d = json_decode($decode,true);
// print_r($d);


// foreach ($flowers as $flower) {
//     echo $flower . "\n";
// }

// foreach($indexAssociative as $key => $value) {
//     echo $key . ": " . $value . "\n";
// }

foreach($countries as $country){

          echo implode(", ", $country['languages']) . "\n";
}
