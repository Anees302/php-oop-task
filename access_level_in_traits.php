<?php

use abc as GlobalAbc;

trait abc{
    private function fn(){
        echo "this is the private method of the trait abc";
    }
    // above private functon cannot be accessed directly in the classes using this trait
}
class tst{
    use abc{
        abc::fn as public chnged;   //use of as keyword makes possible to use the private method as public
        //it's name is also changed to access it publicly
    }
}
$obj = new tst();
$obj->chnged();



?>