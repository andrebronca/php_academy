<?php
namespace Pants;

class PantsMaker {
    private string $color = 'blue';
    private string $size = 'large';

    public function pantsLabel($name){
        return "These pants are size: $this->size, 
        color: $this->color named: $name <br>";
    }
}

//era para funcionar assim:
//$thesePants = new Pants();

$thesePants = new PantsMaker();
echo $thesePants->pantsLabel('leeevi');

$pants = new \Pants\PantsMaker();
echo $pants->pantsLabel('jeans');


