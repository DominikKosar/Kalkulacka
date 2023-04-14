<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "classes.php";
    ?>

    <form action="index.php" method="post">
        <input type="text" name="number1"><br>
        <input type="text" name="number2"><br>
        <input type="submit" value="odeslat" name="submit">
    </form>
</body>
</html>