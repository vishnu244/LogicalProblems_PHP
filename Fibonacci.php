<?php

// Taking input from the user
$FirstNumber = readline("Enter First number of fibonacci series : ");
$SecondNumber = readline("Enter Second number of fibonacci series : ");
$MaxNumbers = readline("Maximum Number of values in series : ");

class FibonacciSeries
{
    public function fibonacci($FirstNumber, $SecondNumber, $MaxNumbers)
    {
        echo $FirstNumber . " ";
        echo $SecondNumber . " ";
        for ($i = 1; $i <= $MaxNumbers - 2; $i++) 
        {
            echo $FirstNumber + $SecondNumber . " ";
            $temp = $FirstNumber;
            $FirstNumber = $SecondNumber;
            $SecondNumber = $temp + $SecondNumber;
        }
    }
}


if (is_numeric($FirstNumber) && is_numeric($SecondNumber) && is_numeric($MaxNumbers) &&
    $FirstNumber >= 0 && $SecondNumber >= 0 && $MaxNumbers > 0){
        
    $myseries = new FibonacciSeries();  //creating Object of class
    $myseries->fibonacci($MaxNumbers, $FirstNumber, $SecondNumber); //using function
}
else {
    echo "PLEASE ENTER VALID INPUT"; //Invalid message 
}
?>