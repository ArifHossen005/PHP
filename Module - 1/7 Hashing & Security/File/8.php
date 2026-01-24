<?php 
$message = "This is a secret message";
$algo = 'aes-256-cbc';
$iv_length = openssl_cipher_iv_length($algo);
$iv = openssl_random_pseudo_bytes($iv_length);
$iv2 = openssl_random_pseudo_bytes($iv_length);
$passphrase = "our_very_secret_key";

$encrypted_data = openssl_encrypt($message, $algo, $passphrase, 0,$iv);
echo $encrypted_data;

echo PHP_EOL;
$decrypted = openssl_decrypt($encrypted_data,$algo,$passphrase,0,$iv);
echo $decrypted;