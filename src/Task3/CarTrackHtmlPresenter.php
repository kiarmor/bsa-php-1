<?php

declare(strict_types=1);

namespace App\Task3;

use App\Task1\Car;
use App\Task1\Track;

class CarTrackHtmlPresenter
{
    public function present(Track $track): string
    {
        //@todo
        $cars = $track->all();
        $car_inf = [];

            for ($i = 0; $i < count($cars); ) {
                foreach ($cars as $car) {
                $car_inf [$i] = '<a>' . $car->getId() . '</a> ' . '<a name="' . $car->getName()  . '">' . $car->getName() . '</a>' . ' speed ' . $car->getSpeed() . ' km\h ' . '<img src="' . $car->getImage() . '">';
                $i++;
            }
        }
        $all_cars = implode(' ', $car_inf);

            return $all_cars;
        }
}