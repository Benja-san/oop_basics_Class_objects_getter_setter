<?php

class Pokemon {

    public const MAX_LVL = 100;

    private int $currentLevel = 5;
    private array $type;
    private string $name;
    private string $picture;

    public function __construct(array $type, string $name, string $picture){
        $this->type = $type;
        $this->name = $name;
        $this->picture = $picture;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getType(): array
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getCurrentLevel(): int
    {
        return $this->currentLevel;
    }

    public function setCurrentLevel(int $currentLevel): void
    {
        $this->currentLevel = $currentLevel;
    }

    public function getPicture(): string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): void
    {
        $this->picture = $picture;
    }

}