<?php

include ("Character.php");
class Warrior extends Character

{
    protected $name;
    protected $life;
    protected $agility;
    protected $strength;
    protected $wit;
    const CLASSE = "Warrior";

    public function __construct($n)
    {
        $this->name = $n;
        $this->life = 100;
        $this->agility = 10;
        $this->strength = 3;
        $this->wit = 3;
    
    }

    public function attack()
    {
        echo "$this->name: I’ll crush you with my hammer!\n";
    }

    public function __destruct()
    {
        //return $this->getLife == 0;
        echo "$this->name: Aarrg I can’t believe I’m dead. . .\n";

    }
        
}

$fight = new Warrior("Bravo");
echo $fight->attack("") ."\n";