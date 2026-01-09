<?php
date_default_timezone_set("Asia/Dhaka");
echo date("d/m/Y h:i:s A");  //today's date
echo PHP_EOL;




$d = new DateTime();
// echo $d->format("d/m/Y h:i:s A");
// echo PHP_EOL;

$d->modify("+5 days -3 hours 20 minutes");
echo $d->format("d/m/Y h:i:s A");
echo PHP_EOL;


// date different 

$today = new DateTime();
$birthDate = new DateTime("2001-7-7");
$diff = $today->diff($birthDate);
echo $diff->format("You are %y years, %m months, %d days old.");
echo PHP_EOL;



// add date 

$today = new DateTime();
$today->modify("+5 days");
echo $today->format("d/m/Y h:i:s A");
echo PHP_EOL;


//days calculate 

$date = new DateTime();
$submitDate = new DateTime("2028-01-18");

$diff = $submitDate->diff($date);
echo $diff->format("There are %y years, %m months, %d days left until the submission date.");
echo "Only " . $diff->days . " days left!";
echo PHP_EOL;


$totalMonths = ($diff->y * 12) + $diff->m;
echo "Only " . $totalMonths . " months left!";
echo PHP_EOL;
