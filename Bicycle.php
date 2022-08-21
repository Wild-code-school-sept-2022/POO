<?php

class Bicycle
{
    public string $color;
    public int $currentSpeed;
    public int $nbSeats;
    public int $nbWheels;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return 'Go !';
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
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    private function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
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
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     */
    private function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}
