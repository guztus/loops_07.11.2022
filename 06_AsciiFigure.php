<?php

class AsciiFigure
{
    const CONSTANT = 3;

    public function drawFigure()
    {
        for ($row = 0; $row < self::CONSTANT; $row++) {
            for ($row = 0; $row < 8; $row++) {
                echo "/";
            }
            for ($row = 0; $row < 8; $row++) {
                echo "\\";
            }
            echo "\n";

            for ($row = 0; $row < 4; $row++) {
                echo "/";
            }
            for ($row = 0; $row < 8; $row++) {
                echo "*";
            }
            for ($row = 0; $row < 4; $row++) {
                echo "\\";
            }
            echo "\n";

            for ($row = 0; $row < 16; $row++) {
                echo "*";
            }
            echo "\n";
        }
    }
}

$newFigure = new AsciiFigure();
$newFigure->drawFigure();