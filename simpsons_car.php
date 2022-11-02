<?php

// simpsons_car.php

class Simpsons_car
{
    private int $nbWheels = 4;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energyType;
    private int $fuelLevel = 80;

    public function __construct(string $color, int $nbSeats, string $energyType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energyType = $energyType;
    }
    public function start(): string
    {
        $this->currentSpeed = 0;
        return "Let's start!";
    }
    public function forward (): string 
    {
        $this->currentSpeed = 19;
        return "GO!";
    }
    public function brake(): string
    {
        $sentence ="";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Homer Brake!!!";
        }
    $sentence .= "Ok Marge, I'm Stopped DOH!";
    return $sentence;
    }    
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function getEnergyType(): string
    {
        return $this->energyType;
    }
    public function getFuelLevel(): int
    {
        return $this->fuelLevel;
    }

}