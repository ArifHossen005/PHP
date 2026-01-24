<?php 
$letters = "abcdefghijklmnopqrstuvwxyz1234567890";
$key = "od9v3al068ek4t2s1xwiqrbh5gzpmcjn7yfu";
// $letters2 = str_split($letters);
// shuffle($letters2);
// $key = join('',$letters2);
// echo $key;

$message = strtolower("i06w 6w o w39x3i 43wwol3, b2b!");
$secretMessage = '';
for($i=0; $i<strlen($message);$i++){
    $character = $message[$i];
    $position = strpos($key,$character);
    if($position!==false){
        $secretMessage .= $letters[$position];
    }else{
        $secretMessage .=$character;
    }
}

echo $secretMessage;