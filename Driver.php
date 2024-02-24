<?php

declare(strict_types=1);

class Driver
{
    private string $pilot;
    private string $coPilot;
    private int $number;
    private string $category;

    public function __construct(string $pilot, string $coPilot, int $number, string $category)
    {
        $this->pilot = $pilot;
        $this->coPilot = $coPilot;
        $this->number = $number;
        $this->category = $category;
    }

    public function getPilot(): string
    {
        return $this->pilot;
    }

    public function getCoPilot(): string
    {
        return $this->coPilot;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getCategory(): string
    {
        return $this->category;
    }
}