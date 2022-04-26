<?php

class Team {

    Protected $name;
    protected $members = [];

    public function __construct($name, $members = []){
        $this->name = $name;
        $this->members = $members;

    }

    public static function start(...$params){
        return new static(...$params);
    }

    public function name(){
        return $this->name;
    }

    public function members(){
        return $this->members;
    }

    public function add($name){
        $this->members[] = $name;
    }

    public function cancel(){

    }

    public function manager(){

    }
}

class Member {
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function LastViewed(){

    }
}



$acne = Team::start("Acne", [
    new Member("John Doe"),
    new Member("jane Doe")
]);

$laracasts = new Team("Laracasts");
$laracasts->add("Bob");


var_dump($acne->members());
echo "<br>";
var_dump($laracasts->members());
echo "<br>";
echo "<br>";


// Inheritance

class CoffeeMaker {
    public function brew(){
        var_dump("brewing the coffee");
    }
}
(new CoffeeMaker())->brew();


?>