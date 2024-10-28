<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <form method="post">
        <label>Enter a number:</label>
        <input type="number" name="number" min="1" required>
        <button type="submit">Generate Table</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST["number"]);
        echo "<h2>Multiplication Table for $num</h2>";
        echo "<table border='1'>";
        echo "<tr><th>*</th>";

        for ($i = 1; $i <= $num; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

        for ($i = 1; $i <= $num; $i++) {
            echo "<tr><th>$i</th>";
            for ($j = 1; $j <= $num; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
