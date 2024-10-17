<?php
// require './User.class.php';
class Admin extends User{
    private $admin;
    public function __construct($name,$password, $admin){
        parent::__construct($name,$password,);
        $this->admin = $admin;
    }
    public function getAdmin(){
        return $this->admin;
    }
}