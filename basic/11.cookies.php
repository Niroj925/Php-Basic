<?php

setcookie('name','Niroj',time()+86400);

if(isset($_COOKIE) && $_COOKIE['name']){
echo 'Hello '.$_COOKIE['name'];
}

// setcookie('name','',time()-86400);
?>

