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

$year = $_POST['year'];
$month = $_POST['month'];
$first_day_of_month = mktime(0, 0, 0, $month, 1, $year); 
$last_day_of_month = mktime(0, 0, 0, $month + 1, 0, $year); 


echo "<table border='1'>";


echo "<caption>" . date("y년 m월", $first_day_of_month) . "</caption>";


echo "<thead><tr>";
echo "<th>일</th><th>월</th><th>화</th><th>수</th>";
echo "<th>목</th><th>금</th><th>토</th>";
echo "</tr></thead>";


echo "<tbody><tr>";


$day_of_week = date("w", $first_day_of_month); 
for ($i = 0; $i < $day_of_week; $i++) {
  echo "<td></td>";
}


for ($i = 1; $i <= date("t", $first_day_of_month); $i++) {
  echo "<td>" . $i . "</td>";


  if (date("w", mktime(0, 0, 0, $month, $i, $year)) == 6) {
    echo "</tr><tr>";
  }
}


$last_day_of_week = date("w", $last_day_of_month); 
for ($i = $last_day_of_week; $i < 6; $i++) {
  echo "<td></td>";
}
echo "</tr></tbody></table>";
?>
</body>
</html>