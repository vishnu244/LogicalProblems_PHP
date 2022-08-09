<?php

class Perfect_Number
{
	function perfectNumber($X)
	{
		$sum = 0;
		for ($i = 1; $i < $X; $i++) {
			if (($X % $i) == 0) {
				$sum = $sum + $i;
			}
		}
		if ($sum == $X) {
			echo "The given Number " . $X . " is a Perfect Number.";
		} else {
			echo "The given Number " . $X . " is not a Perfect Number.";
		}
	}
}
$X = readline("Enter a Number: ");

$perfectNum = new Perfect_Number();
$perfectNum->perfectNumber($X);

?>