<?php

class Executer implements Interviewer
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function askQuestions()
    {
        echo "Это {$this->name} он спрашивает о личностном росте ";
    }
}