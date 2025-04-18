<?php
class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $initialBalance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return $this->balance;
        } else {
            return "Insufficient balance.";
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

// Creating a bank account instance
$account = new BankAccount("123456", 1000);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Account</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Bank Account Details</h1>
    <p>Initial Balance: $<?php echo $account->getBalance(); ?></p>
</body>
</html>
