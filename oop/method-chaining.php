<?php

class Person {

    protected $name;
    protected $age;

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setAge($age) {
        $this->age = $age;
        return $this;
    }

    public function __toString() {
        return "Hello, my name is ".$this->name." and I am ".$this->age." years old.";
    }
}

$person = new Person;
echo $person->setName("Peter")->setAge(21); // echo on object automatically calls magic method __toString()