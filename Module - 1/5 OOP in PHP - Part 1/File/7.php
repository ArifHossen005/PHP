<?php
class Account
{
          private $balance;

          public function __construct($initialBalance)
          {
                    $this->balance = $initialBalance;
          }

          public function deposit($amount)
          {
                    $this->balance += $amount;
          }

          public function withdraw($amount)
          {
                    if ($amount <= $this->balance) {
                              $this->balance -= $amount;
                    } else {
                              echo "Insufficient balance.\n";
                    }
          }

          public function getBalance()
          {
                    return $this->balance;
          }
}

$arifAccount = new Account(1900);
$arifAccount->deposit(500);
$arifAccount->withdraw(22200);
echo $arifAccount->getBalance();
