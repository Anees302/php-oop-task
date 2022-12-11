<?php


// interfaces allow multiple inheritance, means a class can implement more than one interfaces
interface Interphase{

    public function intro();
    public function role();
    
}

class Stu implements Interphase{
    public function intro()
    {
        echo "this is student";

    }
    public function role()
    {
        echo "my role is to take exam";
    }
}


class Teacher implements Interphase{
    public function intro()
    {
        echo "this is teacher";
    }
    public function role()
    {
        echo "my role is to give exam";
    }
}

$t = new Teacher();
$s = new Stu();

$s->role();
echo "<br>";
$t->role();

?>