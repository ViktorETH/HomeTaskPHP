<?php
class DoorFactory
{
    /**
     * @param $width
     * @param $height
     * @return WoodenDoor
     */
    public static function makeWoodenDoor($width, $height): WoodenDoor
    {
        return new WoodenDoor($width, $height);
    }

    /**
     * @param $color
     * @param $width
     * @param $height
     * @return SteelDoor
     */
    public static function makeSteelDoor($color, $width, $height): SteelDoor
    {
        return new SteelDoor($color, $width, $height);
    }
}

