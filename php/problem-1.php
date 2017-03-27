<?php

/**
 * If we list all the natural numbers below 10 that are multiples of 3 or 5,
 * we get 3, 5, 6 and 9. The sum of these multiples is 23.
 *  
 *  Find the sum of all the multiples of 3 or 5 below 1000.
 */

$sum = 0;

// Keep incrementing till we reach our target of 1,000.
for ($i=1; $i<1000; $i++) {
  // Check whether the current multiple is a whole number when divided.
  if (is_int($i/3) || is_int($i/5)) {
    // Add the number to the sum total.
    $sum += $i;
  }
}

echo $sum;