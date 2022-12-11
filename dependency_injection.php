<?php

class Logger{
    public function log($message){
        echo "Logging Message : $message";
    }
}


class UserProfile{
    private $logger;
    // public function __construct(){         this code can be rewritten by the following method for improvement
    //     $this->logger=new Logger();
    // }
    public function __construct($logger){
        $this->logger=$logger;
    }

    
    public function updateUser(){
        // $logger = new Logger();  this line of code has been removed in this method of dependency injection
 
        $this->logger->log('updated user');
    }   
    public function deleteUser(){
        // $logger = new Logger();  this line of code has been removed in this method of dependency injection

        $this->logger->log('deleted user');
    }    
    
}
$logger = new Logger();
$profile = new UserProfile($logger);
$profile->updateUser();
$profile->deleteUser();

?>