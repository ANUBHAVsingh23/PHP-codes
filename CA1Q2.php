<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
        }
        form {
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 20px;
            display: inline-block;
            border-radius: 10px;
        }
        input, button {
            margin: 10px;
            padding: 8px;
            font-size: 16px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #45a049;
        }
        h2, h3 {
            color: #333;
        }
        label {
            color: #444; /* Darker color for labels */
            font-weight: bold;
        }
    </style>
</head>
<body>

    <form method="post">
        <h2>Student Grade Calculator</h2>
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <label>Enter Marks for Subject <?php echo $i; ?>: </label>
            <input type="number" name="marks[]" required><br>
        <?php } ?>
        <button type="submit">Calculate</button>
    </form>
    
    <?php
    function calculateGrade($average) {
        if ($average >= 90) return "A";
        if ($average >= 75) return "B";
        if ($average >= 60) return "C";
        if ($average >= 40) return "D";
        return "Fail";
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $marks = $_POST['marks'];
        $total = array_sum($marks);
        $average = $total / count($marks);
        $grade = calculateGrade($average);
        echo "<h3>Total Marks: $total</h3>";
        echo "<h3>Average Marks: " . number_format($average, 2) . "</h3>";
        echo "<h3>Final Grade: $grade</h3>";
    }
    ?>

</body>
</html>