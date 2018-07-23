<?php

interface Factory
{
    /**
     * @return Door
     */
    public function makeDoor(): Door;

    /**
     * @return Expert
     */
    public function makeExpert(): Expert;
}