<?php
function printFirst10FibonacciNumbers(int $countLimit = 15)
{
    $arr = [0, 1];
    $num1 = 0;
    $num2 = 1;


    for ($count = 2; $count < $countLimit; $count++) {
        //  next Fibonacci number
        $next = $num1 + $num2;

        array_push($arr, $next);

        $num1 = $num2;
        $num2 = $next;
    }

    // Print the first 10 Fibonacci numbers
    foreach ($arr as $item) {
        echo $item . ', ';
    }
}

printFirst10FibonacciNumbers(15);
