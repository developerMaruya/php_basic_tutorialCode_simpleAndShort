<?php

class Animal{
    // public $name;
    public function __construct($name){
        $this->name=$name;
    }
    public function eat(){
        echo $this->name." is eating <br>";
    }
}
class Dog extends Animal{
    public function bark(){
        echo $this->name." is a dog<br>";
        echo $this->name." is barking<br>";
    }
}
class Cat extends Animal{
    public function meow(){
        echo $this->name."is a cat<br>";
        echo $this->name." is meow <br>";
    }
}

$cat=new Cat("push");
$dog=new Dog("rocki");

// calling and use from dog 

$dog->eat();
$dog->bark();
echo "<hr>";
// use from cat class to animal
$cat->eat();
$cat->meow();


?>