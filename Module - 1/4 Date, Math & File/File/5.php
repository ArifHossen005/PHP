<?php
$fileName = __DIR__ . "/../Resources/file.txt";
$urlApi = "http://jsonplaceholder.typicode.com/posts/5";


$Name = "\nOur Country name is Bangladesh";
$data  = file_put_contents($fileName, $Name, FILE_APPEND);
echo "Data written to the file successfully." . PHP_EOL;
