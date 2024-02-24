<?php

declare(strict_types=1);

require_once 'Driver.php';
require_once 'Stage.php';

class Ride
{
    private Stage $stage;
    private Driver $driver;
    private int $rideStartTime;
    private int $rideTime;

    public function __construct(Stage $stage, Driver $driver, int $rideStartTime, int $rideTime)
    {
        $this->stage = $stage;
        $this->driver = $driver;
        $this->rideStartTime = $rideStartTime;
        $this->rideTime = $rideTime;
    }

    public function getStage(): Stage
    {
        return $this->stage;
    }

    public function getDriver(): Driver
    {
        return $this->driver;
    }

    public function getRideStartTime(): int
    {
        return $this->rideStartTime;
    }

    public function getRideTime(): int
    {
        return $this->rideTime;
    }
}