<?php

class Employee {
    private $salary;
    private $password;

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}

print("Private chowa dane w środku klasy żeby nikt z zewnątrz nie mógł 
ich zepsuć a public pokazuje wszystko wszystkim.")

class Human {
    public $name;
    protected $gender;
    private $age;
    public $nationality;

    public function __construct($name, $gender, $age = 0, $nationality = "") {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        $this->nationality = $nationality;
    }

    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getGender() {
        return $this->gender;
    }
    
    public function setGender($gender) {
        $this->gender = $gender;
    }
    
    public function getAge() {
        return $this->age;
    }
    
    public function setAge($age) {
        $this->age = $age;
    }
    
    public function getNationality() {
        return $this->nationality;
    }
    
    public function setNationality($nationality) {
        $this->nationality = $nationality;
    }
}

public function {
    echo 
}



