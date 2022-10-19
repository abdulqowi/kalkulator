<?php

include 'Calculator.php';

$num1 = @$_POST['number1'];
$num2 = @$_POST['number2'];
$type = @$_POST['type'];

$calculator = new Calculator($num1, $num2, $type);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkunator</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="number1">
        <select name="type">
            <option selected disabled>Pilih Operasi</option>
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">x</option>
            <option value="div">:</option>
        </select>
        <input type="number" name="number2">
        <button type="submit">ENTER</button>
    </form>
    <p>Hasil : <?= $calculator->calculation() ?></p>
</body>
</html>