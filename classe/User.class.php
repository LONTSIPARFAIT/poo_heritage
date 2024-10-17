<?php
class User{
    private $name;
    private $password;

    public function __construct($name,$password){
        $this->name = $name;
        $this->password = $password;
    }
    public function getName(){
        return $this->name;
    }
    public function getPassord(){
        return $this->password;
    }
}
