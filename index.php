<?php

use mysql_xdevapi\BaseResult;

include 'Animal.php';
include 'KindInterface.php';
include 'Trait.php';


$animal = new Animal();


class Eagle extends Animal implements BirdKind {
    use CanFly;

    public function fly(Animal $animal) {
        return $this->eat($animal);
    }
}

$eagle = new Eagle();
$resultEagle = $eagle->fly($animal);
var_dump($resultEagle);


class Spider extends Animal implements SpiderKind {
    use CanWeaveWeb;

    public function eat(Animal $animal) {
        return $this->weaveWeb($animal);
    }
}

$spider = new Spider();
$resultSpider = $spider->eat($animal);
var_dump($resultSpider);


class Reptile extends Animal implements ReptileKind {
    use IsPredator;

    public function run(Animal $animal) {
        return $this->predator($animal);
    }
}

$reptile = new Reptile();
$resultReptile = $reptile->run($animal);

var_dump($resultReptile);


class Fish extends Animal implements FishKind {
    use HasBigEyes;

    public function look(Animal $animal) {
        return $this->bigEyes($animal);
    }
}

$fish = new Fish();
$resultFish = $fish->bigEyes($animal);

var_dump($resultFish);


class Cow extends Animal implements MammalKind {
    use CanGiveMilk;

    public function sleep(Animal $animal) {
        return $this->giveMilk($animal);
    }
}

$cow = new Cow();
$resultCow = $cow->sleep($animal);

var_dump($resultCow);