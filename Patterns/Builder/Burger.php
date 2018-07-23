<?php


class Burger
{
    protected $size;
    protected $meat = false;
    protected $salad = false;
    protected $tomato = false;
    protected $sauce = false;
    protected $onion = false;

    /**
     * Burger constructor.
     * @param BurgerBuilder $builder
     */
    public function __construct(BurgerBuilder $builder)
    {
        $this->size = $builder->size;
        $this->meat = $builder->meat;
        $this->salad = $builder->salad;
        $this->tomato = $builder->tomato;
        $this->sauce = $builder->sauce;
        $this->onion = $builder->onion;
    }
}