<?php


trait one{
    public function fun(){
        echo " fun method from trait one";
    }
}
trait two{
    public function fun(){
        echo " fun method from trait two";
    }
}

// here is the conflict that there cannot be two functions with the same name in one class
// insteadof keyword is used to eliminate this conflict and to make clear, from which trait the funciton 
//would be taken
class Test{
    use one, two{
        one::fun insteadof two; // fun mthod from trait one will be used here
    }

}
$obj = new Test();
$obj->fun();

?>