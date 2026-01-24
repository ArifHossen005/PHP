
<?php 
$message = "This is a secret message";
$privateKey = openssl_pkey_new(array(
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
));
$details = openssl_pkey_get_details($privateKey);
$publicKey = $details['key'];
// $privateKeyStr = '';
// openssl_pkey_export($privateKey, $privateKeyStr);
// echo $privateKeyStr;

openssl_public_encrypt($message, $encryptedData,$publicKey);
echo "Encrypted Data = ".base64_encode($encryptedData);
echo PHP_EOL;

openssl_private_decrypt($encryptedData,$decreptedData,$privateKey);
echo "Decrepted Data = ".$decreptedData;
