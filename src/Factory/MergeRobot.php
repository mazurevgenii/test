<?php

namespace Yevhen\Test\Factory;

class MergeRobot implements RobotInterface, MergedRobotInterface
{
    private int $weight = 0;
    private int $speed = 0;
    private int $height = 0;

    public function addRobot(RobotInterface|array $robots): void
    {
        if (is_array($robots)) {
            foreach ($robots as $robot) {
                $this->setWeight($robot->getWeight());
                $this->setSpeed($robot->getSpeed());
                $this->setHeight($robot->getHeight());
            }
        } else {
            $this->setWeight($robots->getWeight());
            $this->setSpeed($robots->getSpeed());
            $this->setHeight($robots->getHeight());
        }
    }

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

    public function setWeight(int $weight): void
    {
        $this->weight += $weight;
    }

    public function setSpeed(int $speed): void
    {
        if ($this->speed == 0) {
            $this->speed = $speed;
        } else {
            $this->speed = min($this->speed, $speed);
        }
    }

    public function setHeight(int $height): void
    {
        $this->height += $height;
    }
}