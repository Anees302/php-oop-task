<?php

class Student{

    
    private $name;
    private $roll;

    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }

    public function setRoll($roll){
        $this->roll=$roll;
    }
    public function getRoll(){
        return $this->roll;
    }
}

$s1 = new Student();
$s1->setName('anees');
$s1->setRoll(18);
echo "Name:", $s1->getName(),"<br>";
echo "Roll no:", $s1->getRoll();


?>