<?php 


// static members of class can be accessed without creating the objects of the class
// static members of the class are accessed using scope resolution operator "::" with the class name outside of the class
// inside the class, the static members can be accessed using the 'self' keyword
class Test{

    public static $staticMember;
   
     public static function setMember($value){
        // here we don't need '->' to access member.
        self::$staticMember = $value;
     }

     public static  function getMember(){
        return self::$staticMember;
     }



}

Test::setMember(100);
echo Test::getMember();
?>