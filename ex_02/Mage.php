<?php

include ("Character.php");
class Mage extends Character
{
    protected $name;
    protected $life;
    protected $agility;
    protected $strength;
    protected $wit;
    const CLASSE = "Mage";

    public function __construct($n)
    {
        $this->name = $n;
        $this->life = 70;
        $this->agility = 10;
        $this->strength = 3;
        $this->wit = 10;
    
    }

    public function attack()
    {
        echo "$this->name: Feel the power of my magic!\n";
    }

    public function __destruct()
    {
        echo "$this->name: By the four gods, I passed away. . .\n";

    }   
        
}
$fight = new Mage("Brujo");
echo $fight->attack("") ."\n";
