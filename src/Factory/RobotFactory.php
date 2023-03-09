<?php

namespace Yevhen\Test\Factory;

use Exception;

class RobotFactory implements RobotFactoryInterface
{
    private array $types;

    public function addType(RobotInterface $robot): void
    {
        $this->types[] = $robot;
    }

    /**
     * @throws Exception
     */
    public function createRobot1(int $quantity = 1): array
    {
        $robots = [];
        for ($i = 1; $i <= $quantity; $i++) {
            $robot = new Robot1();
            if (in_array($robot, $this->types)) {
                $robots[] = $robot;
            } else {
                throw new Exception('Incorrect robot type');
            }
        }

        return $robots;
    }

    /**
     * @throws Exception
     */
    public function createRobot2(int $quantity = 1): array
    {
        $robots = [];
        for ($i = 1; $i <= $quantity; $i++) {
            $robot = new Robot2();
            if (in_array($robot, $this->types)) {
                $robots[] = $robot;
            } else {
                throw new Exception('Incorrect robot type');
            }
        }

        return $robots;
    }

    /**
     * @throws Exception
     */
    public function createMergeRobot(int $quantity = 1): array
    {
        $robots = [];
        for ($i = 1; $i <= $quantity; $i++) {
            foreach ($this->types as $type) {
                if ($type instanceof MergeRobot) {
                    $robots[] = $type;
                }
            }
            if (!$robots) {
                throw new Exception('MergeRobot not found');
            }
        }

        return $robots;
    }
}