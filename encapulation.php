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