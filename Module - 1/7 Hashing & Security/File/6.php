<?php 
$letters = "abcdefghijklmnopqrstuvwxyz1234567890";
// $key = "t16qrcasz8bxvmfydi3kh40p25euw7no9jlg";
$key = 'od9v3al068ek4t2s1xwiqrbh5gzpmcjn7yfu';
// $letters2 = str_split($letters);
// shuffle($letters2);
// $key = join('',$letters2);
// echo $key;

$message = strtolower("This is a secret message, wow!");
$secretMessage = '';
for($i=0; $i<strlen($message);$i++){
    $character = $message[$i];
    $position = strpos($letters,$character);
    if($position!==false){
        $secretMessage .= $key[$position];
    }else{
        $secretMessage .=$character;
    }
}

echo $secretMessage;