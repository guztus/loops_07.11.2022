<?php

class AsciiFigure
{
    const rowCount = 3;

    public function drawFigure()
    {
        $rowCount = self::rowCount;

        $starIncrease = 8;
        $sideIncrease = 4;
        for ($row = 1; $row <= $rowCount; $row++) {
            for ($ll = 1; $ll <= ($rowCount-$row)*$sideIncrease; $ll++) {
                echo "/";
            }
            for ($ll = 1; $ll <= ($starIncrease*$row)-$starIncrease; $ll++) {
                echo "*";
            }
            for ($ll = 1; $ll <= ($rowCount-$row)*$sideIncrease; $ll++) {
                echo "\\";
            }
            echo "\n";
        }
    }
}

$newFigure = new AsciiFigure();
$newFigure->drawFigure();