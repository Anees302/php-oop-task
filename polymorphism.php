<?php


interface Humannn{

    public function breakFast();

}

class Baby implements Humannn{
    public function breakFast()
    {
        echo "baby drinks milk in breakfast";
    }
}
class Athlete implements Humannn{
    public function breakFast()
    {

        echo "ATHLETE eats eggs in breakfast";
        // observe! the method " eat*() " from the interface Human is behaving differntly in different classes
    }
}

?>