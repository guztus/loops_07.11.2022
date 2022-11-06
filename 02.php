<?php

echo "Input number of terms: ";
$userInput = readline();
[$i, $n] = explode(' ', $userInput);

$totalSum = 1;
for ($u = 0; $u < $n; $u++) {
    $totalSum *= $n;
}

echo "The result is: {$totalSum}\n";