<?php
class GeneralAccount
{
          private $balance;
          private $total;
          private $limit;

          public function __construct($initialBalance)
          {
                    $this->balance = $initialBalance;
                    $this->total = 0;
                    $this->limit = 100000;
          }

          public function deposit($amount)
          {
                    $this->balance += $amount;
          }

          public function withdraw($amount)
          {
                    if (($amount + $this->total) > $this->limit) {
                              echo "Withdrawal limit exceeded.\n";
                    } elseif ($amount <= $this->balance) {
                              $this->balance -= $amount;
                              $this->total += $amount;
                              echo "Withdrawal successful. Remaining balance: " . $this->balance . "\n";
                    } else {
                              echo "Insufficient balance.\n";
                    }
          }

          public function getBalance()
          {
                    return $this->balance;
          }
}

class StudentAccount
{
          private $balance;
          private $total;
          private $limit;

          public function __construct($initialBalance)
          {
                    $this->balance = $initialBalance;
                    $this->total = 0;
                    $this->limit = 25000;
          }

          public function deposit($amount)
          {
                    $this->balance += $amount;
          }

          public function withdraw($amount)
          {
                    if (($amount + $this->total) > $this->limit) {
                              echo "Withdrawal limit exceeded.\n";
                    } elseif ($amount <= $this->balance) {
                              $this->balance -= $amount;
                              $this->total += $amount;
                              echo "Withdrawal successful. Remaining balance: " . $this->balance . "\n";
                    } else {
                              echo "Insufficient balance.\n";
                    }
          }

          public function getBalance()
          {
                    return $this->balance;
          }
}

class BusinessAccount
{
          private $balance;
          private $total;
          private $limit;

          public function __construct($initialBalance)
          {
                    $this->balance = $initialBalance;
                    $this->total = 0;
                    $this->limit = null;
          }

          public function deposit($amount)
          {
                    $this->balance += $amount;
          }

          public function withdraw($amount)
          {
                    if ($amount <= $this->balance) {
                              $this->balance -= $amount;
                              $this->total += $amount;
                              echo "Withdrawal successful. Remaining balance: " . $this->balance . "\n";
                    } else {
                              echo "Insufficient balance.\n";
                    }
          }

          public function getBalance()
          {
                    return $this->balance;
          }
}

$generalAccount = new GeneralAccount(5000);
$generalAccount->withdraw(9500);

$studentAccount = new StudentAccount(25000);
$studentAccount->withdraw(25000);

$businessAccount = new BusinessAccount(100000);
$businessAccount->withdraw(50000);
