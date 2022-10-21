<?php

require (dirname(__FILE__) . "/animalClass.php");

class Cat extends Animal {
  public function cry() {
    echo($this->name . "ですにゃ");
  }
}

$cat = new Cat("猫太郎");
$cat->cry();
