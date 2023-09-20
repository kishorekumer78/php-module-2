<?php
function printFirst10FibonacciNumbers()
{
    $arr = [0, 1];
    $num1 = 0;
    $num2 = 1;
    $count = 2;

    while ($count < 10) {
        //  next Fibonacci number
        $next = $num1 + $num2;

        // Check if next is greater than 100
        if ($next > 100) {
            break;
        }

        array_push($arr, $next);

        // Update variables for the next iteration
        $num1 = $num2;
        $num2 = $next;
        $count++;
    }

    // Print the first 10 Fibonacci numbers
    foreach ($arr as $item) {
        echo $item . ', ';
    }
}

printFirst10FibonacciNumbers();
