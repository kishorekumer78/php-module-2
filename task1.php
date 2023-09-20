<?php


function printEvenNumbersFor(int $start, int $end, int $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 !== 0) {
            echo ($i + 1 . " ");
        }
    }
}


function printEvenNumbersWhile($start, $end, $step)
{
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 !== 0) {
            echo $i + 1 . " ";
        }
        $i += $step;
    }
}

function printEvenNumbersDoWhile($start, $end, $step)
{
    $i = $start;
    do {
        if ($i % 2 !== 0) {
            echo $i + 1 . " ";
        }
        $i += $step;
    } while ($i <= $end);
}

printEvenNumbersFor(1, 20, 2);
printEvenNumbersWhile(1, 20, 2);
printEvenNumbersDoWhile(1, 20, 2);
