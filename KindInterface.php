<?php

interface BirdKind{
    public function fly(Animal $animal);
}

interface SpiderKind{
    public function eat(Animal $animal);
}

interface ReptileKind{
    public function run(Animal $animal);
}

interface FishKind{
    public function look(Animal $animal);
}

interface MammalKind{
    public function sleep(Animal $animal);
}