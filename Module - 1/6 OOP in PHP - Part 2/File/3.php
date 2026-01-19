<?php
include_once '1.php';
include_once '2.php';

use Module1\OOPinPHPPart2\File1\Message as Message1;
use Module1\OOPinPHPPart2\File2\Message as Message2;

$message1 = new Message1();
echo $message1->showMessage() . PHP_EOL;
$message2 = new Message2();
echo $message2->showMessage() . PHP_EOL;

//alternative way without 'use' keyword
$message1 = new \Module1\OOPinPHPPart2\File1\Message();
echo $message1->showMessage() . PHP_EOL;
$message2 = new \Module1\OOPinPHPPart2\File2\Message();
echo $message2->showMessage() . PHP_EOL;
