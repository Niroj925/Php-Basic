<?php
echo $_GET['name'];//get the query string name of below url 

echo " your age is {$_GET['age']}";

if(isset($_POST["submit"])){
    echo $_POST['name'];
    echo $_POST['age'];
}

?>

<!-- <a href="<?php echo $_SERVER['PHP_SELF'];?>? 
name=kaji&age=22">Click</a> -->


<!-- for api request we have to request post  -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
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
