<?php

declare(strict_types=1);

namespace App\Task1;
use Exception;

require_once('Track.php');

class Car
{
    /**
     * Car constructor.
     * @param int $id
     * @param string $image
     * @param string $name
     * @param int $speed
     * @param int $pitStopTime
     * @param float $fuelConsumption
     * @param float $fuelTankVolume
     * @throws Exception
     */
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
        if ($speed <= 0){throw new Exception('Speed cant be negative');}
        $this->speed = $speed;
        if ($pitStopTime <= 0){throw new Exception('pitStopTime cant be negative');}
        $this->pitStopTime = $pitStopTime;
        if ($fuelConsumption <= 0){throw new Exception('fuelConsumption cant be negative');}
        $this->fuelConsumption = $fuelConsumption;
        if ($fuelTankVolume <= 0){throw new Exception('fuelTankVolume cant be negative');}
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