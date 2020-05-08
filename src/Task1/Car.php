<?php

declare(strict_types=1);

namespace App\Task1;
require_once('Track.php');

class Car
{
    public function __construct(
        int $id,
        string $image,
        string $name,
        int $speed,
        int $pitStopTime,
        float $fuelConsumption,
        float $fuelTankVolume
    ) {
        $this->id = $id;
        $this->image = $image;
        $this->name = $name;
        $this->speed = $speed;
        $this->pitStopTime = $pitStopTime;
        $this->fuelConsumption = $fuelConsumption;
        $this->fuelTankVolume = $fuelTankVolume;

    }

    public function getId(): int
    {
        // @todo
        return $this->id;
    }

    public function getImage(): string
    {
        // @todo
        return $this->image;
    }

    public function getName(): string
    {
        // @todo
        return $this->name;
    }

    public function getSpeed(): int
    {
        // @todo
        return $this->speed;
    }

    public function getPitStopTime(): int
    {
        // @todo
        return $this->pitStopTime;
    }

    public function getFuelConsumption(): float
    {
        // @todo
        return $this->fuelConsumption;
    }

    public function getFuelTankVolume(): float
    {
        // @todo
        return $this->fuelTankVolume;
    }
}