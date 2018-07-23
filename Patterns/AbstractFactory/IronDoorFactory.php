<?php

class IronDoorFactory implements Factory
{

    /**
     * @return Door
     */
    public function makeDoor(): Door
    {
        return new IronDoor();
    }

    /**
     * @return Expert
     */
    public function makeExpert(): Expert
    {
        return new IronDoorExpert();
    }
}