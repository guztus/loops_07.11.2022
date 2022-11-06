<?php declare(strict_types=1);

class RollTwoDice
{
    public int $rolledNumberOne = 0;
    public int $rolledNumberTwo = 0;
    public int $rolledSum = 0;
    public int $desiredNumber = 0;
    public bool $running = true;


    public function __construct($desiredNumber)
    {
        $this->desiredNumber = $desiredNumber;
    }

    public function roll(): string
    {
        $this->rolledNumberOne = rand(1, 6);
        $this->rolledNumberTwo = rand(1, 6);
        $this->rolledSum = $this->rolledNumberOne + $this->rolledNumberTwo;

        $this->determineIfEqual();
        return $this->printOutcome();
    }

    public function printOutcome(): string
    {
        return "{$this->rolledNumberOne} and {$this->rolledNumberTwo} = {$this->rolledSum}\n";
    }

    public function determineIfEqual()
    {
        if ($this->rolledSum == $this->desiredNumber) {
            $this->running = false;
        }
    }
}

echo "Desired sum: ";
$userChoice = (int) readline();

if ($userChoice > 12 || $userChoice < 2) {
    echo "enter a number from 2 to 12\n";
    exit;
}

$newGame = new RollTwoDice($userChoice);

while ($newGame->running == true) {
    echo $newGame->roll();
}