<?php

declare(strict_types=1);

namespace App\Task1;
require_once('Car.php');

class Track
{
    public $cars = [];
    public function __construct(float $lapLength, int $lapsNumber)
    {
        //@todo
        if ($lapLength <= 0){throw new Exception('lapLength cant be negative');}
        $this->lapLength = $lapLength;
        if ($lapsNumber <= 0){throw new Exception('lapsNumbers cant be negative');}
        $this->lapsNumbers = $lapsNumber;
    }

    public function getLapLength(): float
    {
        // @todo
        return $this->lapLength;
    }

    public function getLapsNumber(): int
    {
        // @todo
        return $this->lapsNumbers;
    }

    public function add(Car $car): void
    {
        // @todo
       $this->cars [] = $car;
    }

    public function all(): array
    {
        // @todo
        return $this->cars;
    }

    public function run(): Car
    {
        // @todo
        if ($this->cars <= 1){throw new Exception('need two cars');}
        $total_dist = $this->lapsNumbers * $this->lapLength;
        $car1 =  $this->cars[0];
        $car2 =  $this->cars[1];

        $c1_PT_num = floor($total_dist / (($car1->getFuelTankVolume() / $car1->getFuelConsumption()) * 100));
        $c1_PT_time = $c1_PT_num *  $car1->getPitStopTime();
        $c2_PT_num = floor($total_dist / (($car2->getFuelTankVolume() / $car2->getFuelConsumption()) * 100));
        $c2_PT_time = $c2_PT_num *  $car2->getPitStopTime();


        $c1 = $car1->getSpeed() - $c1_PT_time;
        $c2 = $car2->getSpeed() - $c2_PT_time;

        if($c1 > $c2){
            return $this->cars[0];
        }
       else if($c2 > $c1){
            return $this->cars[1];
        }

    }
}

$car1 = new Car(1,'https://pbs.twimg.com/profile_images/595409436585361408/aFJGRaO6_400x400.jpg',
    'BMW',100, 20, 15, 45);
$car2 = new Car(2,'https://i.pinimg.com/originals/e4/15/83/e41583f55444b931f4ba2f0f8bce1970.jpg',
    'Tesla',150, 25, 20, 40);
$car3 = new Car(3,'https://fordsalomao.com.br/wp-content/uploads/2019/02/1499441577430-1-1024x542-256x256.jpg',
    'Ford',200, 30, 25, 50);

$track = new Track(30, 10);

$track->add($car1);
$track->add($car3);
$track->all();

$winner = $track->run();