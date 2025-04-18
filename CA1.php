<?php
// Function to calculate tax based on salary
function calculateTax($salary) {
    if ($salary > 50000) {
        return $salary * 0.10; // 10% tax if salary is above ₹50,000
    } else {
        return $salary * 0.05; // 5% tax if salary is ₹50,000 or below
    }
}

// Function to calculate Provident Fund (PF)
function calculatePF($salary) {
    return $salary * 0.12; // 12% PF
}

// Function to calculate HRA (House Rent Allowance)
function calculateHRA($salary) {
    return $salary * 0.15; // 15% HRA
}

// Function to calculate DA (Dearness Allowance)
function calculateDA($salary) {
    return $salary * 0.10; // 10% DA
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $basicSalary = $_POST['basic_salary'];
    
    // Calculating deductions and allowances
    $tax = calculateTax($basicSalary);
    $pf = calculatePF($basicSalary);
    $hra = calculateHRA($basicSalary);
    $da = calculateDA($basicSalary);
    
    // Net salary calculation
    $grossSalary = $basicSalary + $hra + $da;
    $totalDeductions = $tax + $pf;
    $netSalary = $grossSalary - $totalDeductions;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Salary Calculator</title>
    <style>
       body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-image:("slide1.jpeg");
    background-size: cover; /* Ensures the image covers the entire background */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents the image from repeating */
    background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}

        .container {
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            width: 400px;
        }
        h2 {
            text-align: center;
            color: #ffdf00;
            font-size: 24px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #fff;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f0f0f0;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 5px;
            color: #333;
        }
        .result div {
            margin: 10px 0;
        }
        .result strong {
            color: #28a745;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Employee Salary Calculator</h2>
    
    <form method="POST" action="">
        <label for="basic_salary">Enter Basic Salary (₹):</label>
        <input type="number" id="basic_salary" name="basic_salary" required>
        
        <button type="submit">Calculate Net Salary</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <div class="result">
            <h3>Salary Breakdown:</h3>
            <div><strong>Basic Salary:</strong> ₹<?php echo number_format($basicSalary, 2); ?></div>
            <div><strong>Tax Deduction:</strong> ₹<?php echo number_format($tax, 2); ?></div>
            <div><strong>Provident Fund (PF):</strong> ₹<?php echo number_format($pf, 2); ?></div>
            <div><strong>House Rent Allowance (HRA):</strong> ₹<?php echo number_format($hra, 2); ?></div>
            <div><strong>Dearness Allowance (DA):</strong> ₹<?php echo number_format($da, 2); ?></div>
            <div><strong>Total Deductions:</strong> ₹<?php echo number_format($totalDeductions, 2); ?></div>
            <div><strong>Net Salary:</strong> ₹<?php echo number_format($netSalary, 2); ?></div>
        </div>
    <?php endif; ?>
</div>

</body>
</html>