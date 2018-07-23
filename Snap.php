<?php
function Factorial($n) {
	$factorial = $n * ($n-1) * ($n-2)* ($n-3) * 2 * 1;
	for ($i=1; $i <= $n; $i++){
		$factorial = $n * $i;
	}
	return $factorial;
}
$fact = Factorial($n);
echo "Factorial = $fact";
?>

<?php

