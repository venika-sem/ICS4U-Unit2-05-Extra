<?php

class Vehicle {
    private $color;
    private $licensePlate;
    private $numberOfDoors;
    private $speed;
    private $maxSpeed;

    public function __construct($color = 'unknown', $licensePlate = 'unknown', $numberOfDoors = 4, $maxSpeed = 0, $speed = 0) {
        $this->color = $color;
        $this->licensePlate = $licensePlate;
        $this->numberOfDoors = $numberOfDoors;
        $this->speed = $speed;
        $this->maxSpeed = $maxSpeed;
    }

    public function accelerate($accelerationPower, $accelerationTime) {
        $this->speed += ($accelerationPower * $accelerationTime);
        return $this->speed;
    }

    public function brake($brakePower, $brakeTime) {
        $this->speed -= ($brakePower * $brakeTime);
        return $this->speed;
    }

    public function status() {
        return [
            'speed' => $this->speed,
            'maxSpeed' => $this->maxSpeed,
            'numberOfDoors' => $this->numberOfDoors,
            'licensePlate' => $this->licensePlate,
            'color' => $this->color
        ];
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }
}

?>
