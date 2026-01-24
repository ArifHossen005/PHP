<?php 
$message = "Welcome to hasing and Encryption";
$hash  = md5($message);
echo "The MD5 hash of the message is: " . $hash;

if (md5($message) === $hash) {
    echo "\nThe message is authentic.";
} else {
    echo "\nThe message has been tampered with.";
}