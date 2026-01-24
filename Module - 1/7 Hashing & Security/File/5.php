<?php

$message = "Welcome to hashing and Encryption";

$hash = password_hash($message, PASSWORD_BCRYPT);
// echo "The BCRYPT hash of the message is: " . $hash;
if (password_verify($message, $hash)) {
    echo "The message is authentic.";
} else {
    echo "The message has been tampered with.";
}