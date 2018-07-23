<?php


abstract class HiringManager
{
    abstract public function makeInterviewer($name): Interviewer;

    public function takeInterview($name)
    {
        $interviewer = $this->makeInterviewer($name);
        $interviewer->askQuestions();
    }
}