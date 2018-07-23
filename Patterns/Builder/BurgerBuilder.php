<?php


class BurgerBuilder
{
    public $size;
    public $meat = false;
    public $salad = false;
    public $tomato = false;
    public $sauce = false;
    public $onion = false;

    /**
     * BurgerBuilder constructor.
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;

    }

    public function addMeat()
    {
        $this->meat = true;
        return $this;
    }

    public function addSalad()
    {
        $this->salad = true;
        return $this;
    }

    public function addTomato()
    {
        $this->tomato = true;
        return $this;
    }

    public function addSauce()
    {
        $this->sauce = true;
        return $this;
    }

    public function addOnion()
    {
        $this->onion = true;
        return $this;
    }

    public function build(): Burger
    {
        return new Burger($this);
    }

}