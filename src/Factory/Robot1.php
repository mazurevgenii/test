<?php

namespace Yevhen\Test\Factory;

class Robot1 implements RobotInterface
{
    private int $weight = 50;
    private int $speed = 50;
    private int $height = 50;

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