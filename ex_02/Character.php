<?php

class Character
{
    protected $name;
    protected $life;
    protected $agility;
    protected $strength;
    protected $wit;
    const CLASSE = "Character";

    function __construct($n)
    {
        $this->name = $n;
        $this->life = 50;
        $this->agility = 2;
        $this->strength = 2;
        $this->wit = 2;
    }

    function getName($n)
    {
        return $this->name;
    }
    function getLife($life)
    {
        return $this->life;
    }
    function getAgility($agility)
    {
        return $this->agility;
    }
    function getStrength($strength)
    {
        return $this->strength;
    }
    function getWit($wit)
    {
        return $this->wit;        
    }


         
        
}

