<?php

$string="Hello Nepal";
 
echo strlen($string);   

echo strpos($string, '0');

echo strrpos($string,'0');

echo strrev($string);

echo strtolower($string);

echo strtoupper($string);   

echo ucwords($string);  

echo str_replace('word','everyone',$string);

echo substr($string,0,3);
echo substr($string,3);

if(str_starts_with($string,'Hello')){
    echo 'Yes';
}

if(str_ends_with($string, "nepal")){
    echo "yes";
}

$string1='<script> alert("Hello Nepal")</script>';

echo $string1;
