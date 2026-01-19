<?php

use Account as GlobalAccount;

/**
 * Base Account class
 */
abstract class Account
{
          protected $balance;
          protected $totalWithdrawn;
          protected $limit; // null = unlimited

          public function __construct($initialBalance)
          {
                    $this->balance = $initialBalance;
                    $this->totalWithdrawn = 0;
                    $this->limit = null; // default unlimited
          }

          public function deposit($amount)
          {
                    if ($amount <= 0) {
                              echo "Invalid deposit amount.\n";
                              return;
                    }

                    $this->balance += $amount;
                    echo "Deposit successful. Current balance: {$this->balance}\n";
          }

          public function withdraw($amount)
          {
                    // Validate amount
                    if ($amount <= 0) {
                              echo "Invalid withdrawal amount.\n";
                              return;
                    }

                    // Check withdrawal limit (if any)
                    if ($this->limit !== null && ($this->totalWithdrawn + $amount) > $this->limit) {
                              echo "Withdrawal limit exceeded.\n";
                              return;
                    }

                    // Check balance
                    if ($amount > $this->balance) {
                              echo "Insufficient balance.\n";
                              return;
                    }

                    // Process withdrawal
                    $this->balance -= $amount;
                    $this->totalWithdrawn += $amount;

                    echo "Withdrawal successful. Remaining balance: {$this->balance}\n";
          }

          public function getBalance()
          {
                    return $this->balance;
          }
}

/**
 * General Account (Limited)
 */
class GeneralAccount extends Account
{
          public function __construct($balance)
          {
                    parent::__construct($balance);
                    $this->limit = 10000;
          }
}

/**
 * Student Account (Limited)
 */
class StudentAccount extends Account
{
          public function __construct($balance)
          {
                    parent::__construct($balance);
                    $this->limit = 25000;
          }
}

/**
 * Business Account (Unlimited)
 */
class BusinessAccount extends Account
{
          public function __construct($balance)
          {
                    parent::__construct($balance);
                    $this->limit = null; // unlimited
          }
}



echo "---- General Account ----\n";
$general = new GeneralAccount(5000);
$general->withdraw(9500);

echo "\n---- Student Account ----\n";
$student = new StudentAccount(25000);
$student->withdraw(25000);

echo "\n---- Business Account ----\n";
$business = new BusinessAccount(100000);
$business->withdraw(50000);
$business->withdraw(50000);
$business->withdraw(50000);
$business->withdraw(50000);

$account = new Account(200000);
$account->deposit(50000);
