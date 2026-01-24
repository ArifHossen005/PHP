<?php
$hashList = hash_algos();
$message = "Welcome to hashing and Encryption";
foreach ($hashList as $hashAlgo) {
    
echo hash($hashAlgo, $message) . "\n";

}