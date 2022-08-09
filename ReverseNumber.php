<?php

class ReverseNumber
{
	function Reverse($number)
	{
		$Reverse = 0;
		while ($number > 0) {
			$result = $number % 10;
			$Reverse = ($Reverse * 10) + $result;
			$number = floor($number / 10);
		}
		return $Reverse;
	}
}
$ReverseOfNumber = new ReverseNumber();
$number = readline('Enter a Number: ');
echo "Reverse Number of " . $number . " is : " . $ReverseOfNumber->Reverse($number);

?>
