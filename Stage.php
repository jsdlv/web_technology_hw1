<?php

declare(strict_types=1);

class Stage
{
    private string $stageName;
    private float $stageLength;
    private int $stageDifficulty;

    public function __construct(string $stageName, float $stageLength, int $stageDifficulty)
    {
        $this->stageName = $stageName;
        $this->stageLength = $stageLength;
        $this->stageDifficulty = $stageDifficulty;
    }

    public function getStageName(): string
    {
        return $this->stageName;
    }

    public function getStageLength(): float
    {
        return $this->stageLength;
    }

    public function getStageDifficulty(): int
    {
        return $this->stageDifficulty;
    }
}