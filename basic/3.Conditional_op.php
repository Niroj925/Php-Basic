<?php
$age=22;

if($age>=18){
    echo "Valid voter";
}else{
    echo "Not Valid";
}

$t=date("H");

if($t<12){

    echo "good morning";
}elseif($t<17){
    echo"Goof afternoon";
}else{
    echo "good evening";

}

$posts=['first post'];

if(!empty($posts)){
    echo $posts[0];
}else{
    echo 'No post';
}
 
