<?php

$fruits=['apple','orange','pear'];

echo count($fruits);

var_dump(in_array('apple', $fruits));

$fruits[]='kiwi';
array_push($fruits,'mango','banana');
array_unshift($fruits,'graphs');//move to first
array_pop($fruits);
// unset($fruits[2]);//to remove index of array

print_r($fruits);   

$chunked_arr=array_chunk($fruits,2);

print_r($chunked_arr);

$arr1=['sun','mon','tue'];
$arr2=['wed','thu','fri'];

//merging of array
$arr3=array_merge($arr1, $arr2);
$arr4=[...$arr1, ...$arr2];

print_r($arr3);

print_r($arr4);


$a=['green','red','yellow'];
$b=['avocado','apple','banana'];

$c=array_combine($a, $b);

print_r($c);

$keys=array_keys($c);
print_r($keys);

$flippedc=array_flip($c);
print_r($flippedc);

$numbers=range(1,10);

$newNumbers=array_map(function($number){
    return "Number ${number}";
},$numbers);

$lessthan5=array_filter($numbers,fn($number)=>$number<=5);

print_r($lessthan5);

$sum=array_reduce($numbers,fn($carry,$number)=>$carry + $number);

var_dump($sum);