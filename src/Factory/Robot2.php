<?php

namespace Yevhen\Test\Factory;

class Robot2 implements RobotInterface
{
    private int $weight = 100;
    private int $speed = 100;
    private int $height = 100;

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function getHeight(): int
    {
        return $this->height;
    }
}