<?php


class WoodenDoor
{
    private $width;
    private $height;

    /**
     * WoodenDoor constructor.
     * @param float $width
     * @param float $height
     */
    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        echo $this->width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        echo $this->height;
    }
};

