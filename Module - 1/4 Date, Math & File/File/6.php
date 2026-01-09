<?php
$fileName = __DIR__ . "/../Resources/file2.txt";

$data = intval(file_get_contents($fileName));
$counter = $data + 1;
echo file_put_contents($fileName, $counter);



// rename(__DIR__ . "/../Resources/file2.txt", __DIR__ . "/../Resources/file3.txt");
// unlink(__DIR__ . "/../Resources/file3.txt");