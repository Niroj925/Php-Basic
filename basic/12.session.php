<?php

session_start();

if(isset($_POST["submit"])){
    $username=filter_input( INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
    $password=$_POST['password'];

    if($username=='niroj' && $password== 'password'){
        $_SESSION['username'] = $username;
        header('Location:/basic/profile/dashboard.php');
}else{
    echo  'Invalid credentials';
}
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
<div>
    <label for='username'>userName:</label><br/>
    <input type="text" name="username">
</div>
<div>
    <label for='password'>Password:</label><br/>
    <input type="password" name="password">
</div>
<br/>
<input type="submit" value="Submit" name="submit">

</form>
