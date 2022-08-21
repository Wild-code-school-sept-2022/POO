<?php

class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private int $nbSeats;
    private int $energyLevel;
    private string $energy;
    private string $color;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(): string
    {
        $this->currentSpeed = 30;
        return "Okay let's go !!";
    }

    public function brake(): string
    {
        $sentence = '';

        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= 'Brake !!!';
        }
        $sentence .= "I'm stopped !";

        return $sentence;
    }

    /**
     * @param int $nbWheels
     */
    private function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @param int $currentSpeed
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $nbSeats
     */
    private function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @param int $energyLevel
     */
    private function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * @param string $energy
     */
    private function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $color
     */
    private function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
}
