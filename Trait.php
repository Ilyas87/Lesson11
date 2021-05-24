<?php

trait CanFly{
    function eat(Animal $animal){
        $animal->name = 'Орел';
        $animal->action = 'кушает';
        return $animal;
    }
}

trait HasBigEyes{
    function bigEyes(Animal $animal){
        $animal->name = 'Рыба';
        $animal->action = 'имеет большие глаза';
        return $animal;
    }
}

trait IsPredator{
    function predator(Animal $animal){
        $animal->name = 'Рептилья';
        $animal->action = 'хищник';
        return $animal;
    }
}

trait CanGiveMilk{
    function giveMilk(Animal $animal){
        $animal->name = 'Корова';
        $animal->action = 'дает молоко';
        return $animal;
    }
}

trait CanWeaveWeb{
    function weaveWeb(Animal $animal){
        $animal->name = 'Паук';
        $animal->action = 'плетёт паутину';
        return $animal;
    }
}