<?php

class Piglet
{
    public int $score = 0;
    public int $rolledNumber = 0;
    public bool $running = true;

    public function welcomeMessage(): string
    {
        return "Welcome to Piglet!\n";
    }

    public function roll(): string
    {
        $this->rolledNumber = rand(1, 6);

        if ($this->rolledNumber == 1) {
            return $this->gameOver();
        }

        $this->addScore($this->rolledNumber);
        return "You rolled a {$this->rolledNumber}!\n Roll again? ";
    }

//    public function readScore(): int
//    {
//        return $this->score;
//    }

    public function addScore($points)
    {
        $this->score += $points;
    }

    public function gameOver(): string
    {
        $this->stopGame();
        return "You rolled a {$this->rolledNumber}!\n You got 0 points.\n";
    }

    public function playerStopGame(): string
    {
        $this->stopGame();
        return "You got {$this->score} points.\n";
    }

    public function stopGame()
    {
        $this->running = false;
    }
}

$gameOne = new Piglet();
echo $gameOne->welcomeMessage();
echo $gameOne->roll();

while ($gameOne->running) {

    $userChoice = readline();

    if ($userChoice !== 'y') {
        echo $gameOne->playerStopGame();
        exit;
    }

    echo $gameOne->roll();
}

