<!DOCTYPE html>
<html>
<head>
	<title>Homework3</title>
</head>
<body>
    <form method="POST">
		<label for="number">1~100까지의 숫자를 입력하세요</label> <br>
		<input type="number" name="number" id="number" min="1" max="100">
		<input type="submit" value="완료">
	</form>


	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$n = $_POST['number'];
		$f1 = 0;
		$f2 = 1;
		echo "<table>";
		echo "<tr><th>i</th><th>fi</th><th>fi+1</th><th>fi+1/fi</th></tr>";
		for ($i = 1; $i <= $n; $i++) {
			$fi = $f1 + $f2;
			$f1 = $f2;
			$f2 = $fi;
			$proportion = ($f2 / $f1);
			echo "<tr><td>$i</td><td>$fi</td><td>$f2</td><td>$proportion</td></tr>";
		}
		echo "</table>";
	}
	?>
	
</body>
</html>