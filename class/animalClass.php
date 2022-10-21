<?php

class Animal {

  protected $name;

  public function __construct($name) {
    $this->name = $name;
  }

  public function cry() {
    echo($this->name . "です。");
  }
}