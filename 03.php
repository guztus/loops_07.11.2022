<?php

echo "Enter the first word: \n";
$firstWord = (string) readline();

echo "Enter the second word: \n";
$secondWord = (string) readline();

$lineLength = 30;

$wordLength = strlen($firstWord) + strlen($secondWord);
$remainder = $lineLength - $wordLength;

$dots = '';
for ($i = 0; $i < $remainder; $i++) {
    $dots .= ".";
}
echo "{$firstWord}" . "{$dots}" . "{$secondWord}";