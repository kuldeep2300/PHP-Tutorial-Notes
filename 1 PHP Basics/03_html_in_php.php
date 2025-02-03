<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML tags in PHP</title>
</head>
<body>
    <h1>HTML tags in PHP</h1>
    <?php echo "HTML tag";?>
    <?php echo "h3 tag";?>
    <h3><?php echo "h3 tag";?></h3>

    <p style="color:blue">Iam styling element</p>
    <p <?php echo 'style="color:red"'?>>Iam styling element</p>



    <!-- widely -->
    <?php echo "<div>"?>
    <h1>HTML tags in PHP</h1>
    <h1>HTML tags in PHP</h1>
    <h1>HTML tags in PHP</h1>
    <h1>HTML tags in PHP</h1>
    <?php echo "</div>"?>
</body>
</html>