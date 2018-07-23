<?php


class SteelDoor
{
    private $color;
    private $width;
    private $height;

    /**
     * SteelDoor constructor.
     * @param string $color
     * @param float $width
     * @param float $height
     */
    public function __construct(string $color, float $width, float $height)
    {
        $this->color = $color;
        $this->width = $width;
        $this->height = $height;
    }

    public function getColor(): string
    {
        echo $this->color;
    }

    public function getWidth(): float
    {
        echo $this->width;
    }

    public function getHeight(): float
    {
        echo $this->height;
    }
}