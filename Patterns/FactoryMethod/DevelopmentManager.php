<?php

class DevelopmentManager extends HiringManager
{

    public function makeInterviewer($name): Interviewer
    {
        return new Developer($name);
    }
}