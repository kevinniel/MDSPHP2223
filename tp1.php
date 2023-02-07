<?php

function dd($datas) {
    echo("<br>");
    echo("<pre>");
    echo("<code>");
    var_dump($datas);
    echo("</code>");
    echo("</pre>");
}

class Character
{

    public $pseudo;
    public $healthPoints;
    public $defense;
    public $attack;
    public $weapon = null;
    public $mount = null;
    public $shield = null;

    public function __construct($pseudo, $healthPoints = 100, $defense = 10, $attack = 10)
    {
            $this->pseudo = $pseudo;
            $this->healthPoints = $healthPoints;
            $this->defense = $defense;
            $this->attack = $attack;
    }

    public function getWeapon($weapon)
    {
        $this->weapon = $weapon;
    }

    public function getShield($shield)
    {
        $this->shield = $shield;
    }

    public function getMount($mount)
    {
        $this->mount = $mount;
    }

    // TODO
    public function attack($ennemy){
        $dmgCount = 0;
        $dmgCount += $this->attack;

        if ($this->weapon != null) {
            // sustainability
            if($this->weapon->sustainability > 0) {
                // dmg
                $dmgCount += $this->weapon->damage;

                $this->weapon->sustainability--;
            }
            if ($this->weapon->sustainability <= 0) {
                $this->weapon = null;
            }
        }

        if ($this->mount != null) {
            $dmgCount += $this->mount->damageBonus;
        }

        $ennemy->defense($dmgCount);
    }

    // TODO
    public function defense($dmgCount){
        $defCount = 0;
        $defCount += $this->defense;

        if ($this->mount != null) {
            $defCount += $this->mount->defenseBonus;
        }

        if ($this->shield != null) {
            // sustainability
            if($this->shield->sustainability > 0) {
                // dmg
                $defCount += $this->shield->block;

                $this->shield->sustainability--;
            }
            if ($this->shield->sustainability <= 0) {
                $this->shield = null;
            }
        }

        if($dmgCount > $defCount) {
            $this->healthPoints -= ($dmgCount - $defCount);
        }
    }
}

class Weapon
{
    public $damage;
    public $sustainability;

    public function __construct($damage = 10, $sustainability = 10)
    {
        $this->damage = $damage;
        $this->sustainability = $sustainability;
    }
}

class Shield {
    public $block;
    public $sustainability;

    public function __construct($block = 10, $sustainability = 10)
    {
        $this->block = $block;
        $this->sustainability = $sustainability;
    }
}

class Mount {
    public $damageBonus;
    public $defenseBonus;

    public function __construct($damageBonus = 10, $defenseBonus = 10)
    {
        $this->damageBonus = $damageBonus;
        $this->defenseBonus = $defenseBonus;
    }
}

$player = new Character("(BK) James Mc Lamore", 1000, 10, 12);

$ennemy = new Character("Ronald Mc Donald");

dd($player);
dd($ennemy);

$player->attack($ennemy);

dd($player);
dd($ennemy);


$arbalete = new Weapon();
$player->getWeapon($arbalete);

$player->attack($ennemy);

dd($player);
dd($ennemy);

$player->attack($ennemy);

dd($player);
dd($ennemy);

$poneyZebre = new Mount();
$ennemy->getMount($poneyZebre);

$player->attack($ennemy);

dd($player);
dd($ennemy);

$bouclier = new Shield();
$ennemy->getShield($bouclier);

$player->attack($ennemy);

dd($player);
dd($ennemy);