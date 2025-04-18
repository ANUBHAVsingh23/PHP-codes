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
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        } else {
            return false;
        }
    }

    public function getBalance() {
        return $this->balance;
    }

    public function transfer($amount, $toAccount) {
        if ($this->withdraw($amount)) {
            $toAccount->deposit($amount);
            return true;
        } else {
            return false;
        }
    }
}

// Creating two bank account instances
$account1 = new BankAccount("123456", 1000);
$account2 = new BankAccount("654321", 500);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fund Transfer</title>
</head>
<body>
<h1>Anubhav Singh</h1>
    <h1>Transfer Funds</h1>
    <?php
    if ($account1->transfer(200, $account2)) {
        echo "<p>Transfer successful!</p>";
    } else {
        echo "<p>Transfer failed due to insufficient funds.</p>";
    }
    echo "<p>Account 1 Balance: $" . $account1->getBalance() . "</p>";
    echo "<p>Account 2 Balance: $" . $account2->getBalance() . "</p>";
    ?>
</body>
</html>
