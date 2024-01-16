<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h2>Simple PHP Calculator</h2>
    <form method="post" action="">
        <label for="num1">Enter number 1:</label>
        <input type="number" name="num1" required>
        
        <label for="operator">Select operation:</label>
        <select name="operator" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>
        
        <label for="num2">Enter number 2:</label>
        <input type="number" name="num2" required>
        
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect user inputs
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        // Perform calculation
        switch ($operator) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                // Check if denominator is not zero
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero!";
                }
                break;
            default:
                $result = "Invalid operator";
                break;
        }

        // Display result
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
