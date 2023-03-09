<?php

namespace Yevhen\Test\Factory;

interface RobotInterface
{
    public function getWeight(): int;

    public function getSpeed(): int;

    public function getHeight(): int;
}