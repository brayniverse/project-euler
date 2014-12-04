<?php

/* 2520 is the smallest number that can be divided by each of the numbers
 * from 1 to 10 without any remainder.
 * 
 * What is the smallest positive number that is equally divisible by all of the
 * numbers between 1 to 20?
 */

$max = 20;
$current = 1;
$matches = 0;

do
{
    $matches = 0;

    echo $current . "\r";

    for ($i = 1; $i <= $max; $i++)
    {
        if ($current % $i === 0)
        {
            $matches++;
        }
    }

    if ($matches < $max) $current++;
} while ($matches < $max);

var_dump($current);
