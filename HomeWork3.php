<!DOCTYPE html>
<html>
<head>
	<title>Homework3</title>
</head>
<body>


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