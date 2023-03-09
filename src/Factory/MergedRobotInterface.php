<?php

namespace Yevhen\Test\Factory;

interface MergedRobotInterface
{
    public function addRobot(RobotInterface|array $robots): void;

    public function setWeight(int $weight): void;

    public function setSpeed(int $speed): void;

    public function setHeight(int $height): void;
}