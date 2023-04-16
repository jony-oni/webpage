<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web ProgrammingHomeWork</title>
</head>
<body>

<!--Homework1-->

<?php

$n = 30;
$sum = 0;
$prod = 1;

echo "▶1부터 N까지의 숫자 프린트: $for <br>";
for ($i = 1; $i <= $n; $i++) {
    echo $i . " ";
    $sum += $i;
    $prod *= $i;
}

echo "<br>";
echo "▶전체 합: $sum <br>";
echo "▶전체 곱: $prod <br>";
?>    

</body>
</html>