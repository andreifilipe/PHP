<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link   rel="stylesheet href= "
</head>
<body>
<?php
echo "<h1>Olá mundo</h1>"
?>

<div>
    <?php
    $nome="Andrei";
    $altura=1.74;

    echo "$nome tem $altura"
    ?>
</div>

<div2>
    <?php
    $n1=5;
    $n2=10;
    echo "<br/>A soma vale".($n1+$n2);
    echo "<br/>A subtração vale".($n1-$n2);
    echo "<br/>a multiplicação vale".($n1*$n2);
    echo "<br/>a divisão vale".($n1/$n2);
    echo "<br/>o modulo vale".($n1%$n2);
    ?>
</div2>

<style>
    h1 {
        color: greenyellow;
        text-shadow: 1px 1px  1px black;
    }

    div2 {
        color: aqua;

    }
</style>
</body>
</html>