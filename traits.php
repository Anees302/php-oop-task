<?php

trait abc{
    public function fn1(){
        echo " this is fucntion1 of the trait abc";
    }
}
trait xyz{
   
    public  function fn2(){
        echo "this is funciton2 of trait xyz";
    }
}

class Prnt
{ 

    use abc;
    use xyz;
}


$objct = new Prnt();
$objct->fn1();

//when  using tratis and extending class altogether
// when it comes to using method which are defined with the same name in base class and the trait
// the class mehtods are overridden by the trait methods.
?>
