<?php

class Studentt{

    function __construct($name,$roll){
        $this->name = $name;
        $this->roll = $roll;
    }
    private $name;
    private $roll;


    public function getName(){
        return $this->name;
    }


    public function getRoll(){
        return $this->roll;
    }
}

$s1 = new Studentt("Ayaan",48);

echo "Name:", $s1->getName(),"<br>";
echo "Roll no:", $s1->getRoll();


?>