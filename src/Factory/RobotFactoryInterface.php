<?php

namespace Yevhen\Test\Factory;

interface RobotFactoryInterface
{
    public function addType(RobotInterface $robot): void;

    public function createRobot1(int $quantity): array;

    public function createRobot2(int $quantity): array;

    public function createMergeRobot(int $quantity): array;
}