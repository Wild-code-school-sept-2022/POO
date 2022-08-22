<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    public const ENERGY_ALLOWED = [
        'fuel',
        'electric'
    ];

    public int $storage;
    private string $energy;
    private int $storageLevel = 0;

    public function __construct(string $color, int $nbSeats, int $storage, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->storage = $storage;
    }

    public function isFull(): string
    {
        return $this->storageLevel < $this->storage ? 'in filling' : 'full';
    }


    public function getStorageLevel(): int
    {
        return $this->storageLevel;
    }

    public function setStorageLevel(int $storageLevel): void
    {
        $this->storageLevel = $storageLevel;
    }

    public function getStorage():int
    {
        return $this->storage;
    }

    public function setStorage(int $storage): void
    {
        $this->storage = $storage;
    }

}