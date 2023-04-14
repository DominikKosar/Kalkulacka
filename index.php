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

        if(isset($_POST["submit"])){
            $n1 = $_POST["number1"];
            $n2 = $_POST["number2"];

            //vytvoříme objekt
            $kalkulator = new Kalkulacka();

            //zavolání operací z classy Kalkulacka
            $kalkulator->scitani($n1, $n2);
            $kalkulator->odcitani($n1, $n2);
            $kalkulator->nasobeni($n1, $n2);
            $kalkulator->deleni($n1, $n2);

        }


    ?>

    <form action="index.php" method="post">
        <input type="text" name="number1"><br>
        <input type="text" name="number2"><br>
        <input type="submit" value="odeslat" name="submit">
    </form>
</body>
</html>