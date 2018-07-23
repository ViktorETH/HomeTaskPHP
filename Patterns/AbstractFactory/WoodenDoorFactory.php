<?php


class WoodenDoorFactory implements Factory
{

    /**
     * @return Door
     */
    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    /**
     * @return Expert
     */
    public function makeExpert(): Expert
    {
        return new WoodenDoorExpert();
    }
}