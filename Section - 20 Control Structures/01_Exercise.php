<!-- This exercise will be started after learning these 3 folders. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>

<body>
    <h1>Exercise - 1) Multiplication Table</h1>
    <table border="1">
        <?php
        for ($tablenum = 1; $tablenum <= 20; $tablenum++) {
            echo "<tr>";
            echo "<td colspan = 10> Multiplication Table of $tablenum </td>";
            echo "</tr>";

            for ($value = 1; $value <= 10; $value++) {
                echo "<tr>";
                echo "<td> $tablenum * $value = " . $tablenum * $value . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>