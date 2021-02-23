<?php

require 'TalkInterface.php';
require 'Dog.php';
require 'Cat.php';

$cat = new Cat();
$dog = new Dog();

echo $cat->talk() . '<br>' . $dog->talk();

