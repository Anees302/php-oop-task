<?php

class Human{

private $name;
private $age;

public function setName($name){
        $this->name = $name;
}
public function getName(){
    return $this->name;
}

public function setAge($age){
    $this->age = $age;
}
public function getAge(){
return $this->age;
}

}


//here  the Student class is child class of the class Human.
// the Student class now has access to all the methods and data members of it's parent class
// beside the features of the parent class, Student class also have it's own features like roll and name
// the concept of inheritance makes code reusable and simple in the sense that we don't need to write the general features again and again in every class.

class Student extends Human{

    private $roll;
    private $gpa;
    public function setAge($roll){
        $this->roll = $roll;
    }
    public function getRoll(){
    return $this->roll;
    }

    public function setGpa($gpa){
        $this->gpa = $gpa;
    }
    public function getGpa(){
    return $this->gpa;
    }

}

$s=new Student();
$s->setName('anees');
echo "Name ",$s->getName();


?>