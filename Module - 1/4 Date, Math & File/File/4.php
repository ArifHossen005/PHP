<?php
// $fileName = "Resources/file.txt";
$fileName = __DIR__ . "/../Resources/file.txt";
$urlApi = "http://jsonplaceholder.typicode.com/posts/5";

if (file_exists($fileName)) {
          $data = file_get_contents($fileName);
          echo $data;
} else {
          echo "The file does not exist." . PHP_EOL;
}
echo PHP_EOL;


$data = file_get_contents($urlApi);
$data = json_decode($data, true);
echo $data['title'];
