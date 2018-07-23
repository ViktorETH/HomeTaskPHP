<?php


class ExecutorManager extends HiringManager
{

    public function makeInterviewer($name): Interviewer
    {
        return new Executer($name);
    }
}