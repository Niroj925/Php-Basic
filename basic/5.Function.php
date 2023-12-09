<?php
$x=11;

function User($name){
    //$x //it's falls because x has global scope
    global $x;//function has own scope
    echo $x ,",";
    echo "function has it's own scope ";
    echo $name;
}

echo $x;

User('niroj');

function  sum($n1=2,$n2=7){
    return ($n1 + $n2);
}

$total=sum(3,6);
echo $total;

//arrow function
$mul=fn($n1= 2,$n2= 7)=>$n1*$n2;

echo $mul(3,2);