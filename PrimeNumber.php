
<?php
           
    $N = readline("Enter the Number ");
    $x = 0;
    for ($i = 2; $i < $N; $i++)
    {
        if (($N % $i) == 0)
        {
            echo"Number is not Prime.";
            $x = 1;
        }
    }
    if ($x == 0)
        echo"Number is Prime.\n";
            
        
?>