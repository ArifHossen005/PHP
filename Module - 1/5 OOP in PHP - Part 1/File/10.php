<?php
// Currency conversion
class Exchange
{
          private $apiurl = "https://api.exchangerate-api.com/v4/latest/";

          // Method 1: শুধু rate বের করবে
          public function convertCurrency($fromCurrency = 'USD', $toCurrency = 'BDT')
          {
                    // API থেকে rate data আনা
                    $exchangeRate = file_get_contents($this->apiurl . $fromCurrency);
                    $exchangeData = json_decode($exchangeRate, true);

                    // শুধু rates অংশ নেওয়া
                    $rates = $exchangeData['rates'];

                    // প্রয়োজনীয় currency rate ফেরত দেওয়া
                    return $rates[strtoupper($toCurrency)];
          }

          // Method 2: amount convert করবে
          public function convert($amount, $fromCurrency = 'USD', $toCurrency = 'BDT')
          {
                    // আগের method ব্যবহার করে rate পাওয়া
                    $rate = $this->convertCurrency($fromCurrency, $toCurrency);

                    // total amount return করা
                    return $amount * $rate;
          }
}

// ----------------- ব্যবহার -----------------
$total = 1000;
$cc = new Exchange();

// total amount বের করা
$totalAmount = $cc->convert($total, "GBP", "BDT");

// result print
echo "Total Amount: " . $totalAmount;
