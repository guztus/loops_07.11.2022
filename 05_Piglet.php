<?php

class Piglet
{
    private int $score = 0;

    public function welcomeMessage(): string
    {
        return "Welcome to Piglet!";
    }

    public function roll(): int
    {
        $rolledNumber = rand(1, 6);
        if ($rolledNumber !== 1) {
            $this->addScore();
        }
//        return rand(1, 6);
//        $rolledNumber = rand(1, 6);
//        if ($rolledNumber == 1) {
//            return $this->score = 0;
//        }
//        return $this->score += $rolledNumber;
    }

    public function readScore(): int
    {
        return $this->score;
    }

    public function addScore(): int
    {
        return $this->score++;
    }

}

$gameOne = new Piglet();
echo $gameOne->welcomeMessage();

while (true) {
    $rolledNumber = $gameOne->roll();

    echo "You rolled a {$rolledNumber}!\n";

    if ($rolledNumber == 1) {
        echo "You got {$gameOne->readScore()}";
        exit;
    }

    echo "Roll again?\n";
    $userChoice = (string) readline();

    if ($userChoice !== strtolower('y')) {
        echo "You got {$gameOne->readScore()} points\n";
        exit;
    }

}