<?php
session_start();    
if(isset($_SESSION["username"])){
    echo "<h1>Welcome,{$_SESSION['username']} </h1>";
    echo '<a href="/basic/profile/logout.php">Logout </a>';
}else{
    echo '<h1>Welcome Sir</h1>';
    echo '<a href="/basic/12.session.php">Home </a>';
}

?>