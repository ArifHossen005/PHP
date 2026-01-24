<?php 
$ciphers = openssl_get_cipher_methods();
print_r($ciphers);