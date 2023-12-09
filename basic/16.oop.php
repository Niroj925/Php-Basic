<?php


class User{

    public $name;
    public $email;
    public $password;

    //create a constructor
    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
 
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}

$user1=new User('kaji',"kk@gmail.com","434");  
$user2=new User('niro','nn@gamil.cl','33');

// $user1->set_name('Niroj');
// $user2->set_name('thapa');

// echo $user1->get_name();
// echo $user2->get_name();

echo $user1->name;
echo $user2->email;


//inheritance

class Employee extends User{
    private $title;
    public function __construct( $name, $email, $password, $title ){
    //get from user class 
    parent::__construct($name, $email, $password);
    $this->title = $title;
        
    }

    public function get_title(){
        return $this->title;
    }
}

$emp1=new Employee('niro','nn@gmail.com','3535','Manager');

echo $emp1->get_title();