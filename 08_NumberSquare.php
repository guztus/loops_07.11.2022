<?php declare(strict_types=1);

class NumberSquare
{
    public int $min;
    public int $max;

    public function __construct($min, $max)
    {
        $this->min = $min;
        $this->max = $max;
    }

    public function createRotation(): string
    {
        $numbers = range($this->min, $this->max);
        $sequence = implode($numbers);
        $finalSequence = '';

        for ($i = 0; $i < count($numbers); $i++) {
            $finalSequence .= $sequence . "\n";

            $numbers[] = $numbers[0];
            array_shift($numbers);

            $sequence = implode($numbers);
        }
        return $finalSequence;
    }
}

echo "Min? ";
$minNumber = (int) readline();

echo "Max? ";
$maxNumber = (int) readline();

$numbers = new NumberSquare($minNumber, $maxNumber);
echo $numbers->createRotation();