<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web ProgrammingHomeWork</title>
</head>
<body>

<!--Homework2-->

<?php

$n = 30;
$data = array();
for ($i = 0; $i < $n; $i++) {
  $data[$i] = rand(10, 100);
}

echo "▶생성된 랜덤 숫자: <br> ";
for ($i = 0; $i < $n; $i++) {
  echo $data[$i] . " ";
}

echo "<br>";
echo "<br>";

sort($data);
echo "▶위 숫자들을 올림차순으로 소팅한 결과:<br> ";
for ($i = 0; $i < $n; $i++) {
  echo $data[$i] . " ";
}
?>
    
</body>
</html>