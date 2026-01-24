<?php 
$message = "Welcome to hasing and Encryption";
$messge2 = "This is different message";
$message3 = "Another message here";
$hash  = sha1($message);
$hash2  = hash('sha256', $messge2);
$hash3  = hash('sha512', $message3);
echo "The SHA1 hash of the message is: " . $hash;
echo "\nThe SHA256 hash of the different message is: " . $hash2;
echo "\nThe SHA512 hash of another message is: " . $hash3;