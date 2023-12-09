<?php

if(isset($_POST["submit"])){
    $name=filter_input( INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
    $age=filter_input( INPUT_POST,'age',FILTER_SANITIZE_SPECIAL_CHARS);

    echo "your name is  {$name} and age {$age} ";
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
<div>
    <label for='name'>Name:</label><br/>
    <input type="text" name="name">
</div>
<div>
    <label for='age'>Age:</label><br/>
    <input type="text" name="age">
</div>
<br/>
<input type="submit" value="Submit" name="submit">

</form>
