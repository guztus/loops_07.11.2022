<?php declare(strict_types=1);

class FizzBuzz {
    public int $maxNumber;

    public function __construct(int $maxNumber)
    {
        $this->maxNumber = $maxNumber;
    }

    public function printFizzBuzz () {
        for ($i = 1; $i <= $this->maxNumber; $i++) {
            if ($i %3 == 0 && $i %5 == 0) {
                echo "FizzBuzz ";

            } else if ($i %5 == 0) {
                echo "Buzz ";

            } else if ($i %3 == 0) {
                echo "Fizz ";

            } else {
                echo "$i ";

            }

            if ($i %20 == 0) {
                echo "\n";
            }
        }
    }
}

$userInput = (int) readline();
$newGame = new FizzBuzz($userInput);

$newGame->printFizzBuzz();
