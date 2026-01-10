<?php
//currency conversion 
class Exchange
{
          private $apiurl = "https://api.exchangerate-api.com/v4/latest/";
          public function convertCurrency($fromCurrency = 'USD', $toCurrency = 'BDT')
          {
                    $exchangeRate = file_get_contents($this->apiurl . $fromCurrency);
                    $exchangeData = json_decode($exchangeRate, true);
                    $rates = $exchangeData['rates'];
                    $todaysRate = $rates[strtoupper($toCurrency)];
                    return $todaysRate;

                    // echo $amount * $todaysRate;
          }
}

$total = 1000;
$cc = new Exchange();
$rate = $cc->convertCurrency("gbp", "bdt");
$totalAmount = $total * $rate;
echo $totalAmount;
