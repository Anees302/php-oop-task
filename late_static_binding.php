<?php

class Car{
public static $name = 'Tesla';
public static function getCar()
{
return "The car name is : " . static::$name;
}
public static function getOwner()
{
echo static::getCar();
}
}
class newCar extends Car
{

public static function getCar()
{

return "The car name is : " . self::$name . " and owner is Anees.";
}

}
Car::getOwner();
echo "<br>";
newCar::getOwner();

?>