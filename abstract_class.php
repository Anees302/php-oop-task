<?php

abstract class Humann{
    abstract public function introduction();

}

class Student extends Humann{
    public function introduction()
    {
        echo "hi i am student";
    }
}
class Doctor extends Humann{
    public function introduction()
    {
        echo "hi i am doctor";
    }
}
class Engineer extends Humann{
    public function introduction()
    {
        echo "hi i am engineer";
    }
}


$eng = new Engineer();
$doc = new Doctor();
$doc->introduction();
echo "<br>";
$eng->introduction();



?>