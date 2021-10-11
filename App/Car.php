<?php
namespace App;

class Car 
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start():string
    {
        return "Let's Go";
    }

    public function forward():string
    {
        $this->currentSpeed = 15;
        return 'here we go !';
    }

    public function brake()
    {
        $sentence = "";
        while($this->currentSpeed > 0){
            $this->currentSpeed--;
            $sentence .= "slower, slower !";
        }
        $sentence .= "<br>oufff i'm stopped";
        return $sentence;
    }

    public function getColor():string
    {
        return $this->color;
    }

    public function getnbWheels():int
    {
        return $this->nbWheels;
    }
    public function getCurrentSpeed():int
    {
        return $this->currentSpeed;
    }
    public function getnbSeats():int
    {
        return $this->nbSeats;
    }
    public function getEnergy():string
    {
        return $this->nbEnergy;
    }
    public function getEnergyLevel():int
    {
        return $this->energyLevel;
    }

    public function setColor(string $color):void
    {
        $this->color = $color;
    }
    public function setEnergy(string $energy):void
    {
        $this->energy = $energy;
    }
    public function setEnergyLevel(int $energyLevel):void
    {
        $this->energyLevel = $energyLevel;
    }
    public function setNbSeats(int $nbSeats):void
    {
        $this->nbSeats = $nbSeats;
    }
    public function setNbWheels(int $NbWheels):void
    {
        $this->NbWheels = $NbWheels;
    }
    public function setCurrentSpeed(int $currentSpeed):void 
    {
        $this->currentSpeed = $currentSpeed;
    }
}