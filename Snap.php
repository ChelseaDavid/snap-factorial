
<?php
function factorial(int $n): int {
	if($n < 0) {
		throw(new \RangeException("no negatives - the power of positive thinking!"));
	}
	if($n > 20) {
		throw(new \RangeException("RED ALERT! NUMBERS TOO LARGE! WE NEED TO EJECT THE WARP CORE!"));
	}

	$answer = 1; // default to 0! = 1
	for($i = 1; $i <= $n; $i++) {
		$answer = $answer * $i;
	}
	return $answer;
}

function factorialRecursive(int $n): int {
	if($n < 0) {
		throw(new \RangeException("no negatives - the power of positive thinking!"));
	}
	if($n > 20) {
		throw(new \RangeException("RED ALERT! NUMBERS TOO LARGE! WE NEED TO EJECT THE WARP CORE!"));
	}

	if($n === 0) {
		return 1;
	} else {
		return($n * factorialRecursive($n - 1));
	}
}