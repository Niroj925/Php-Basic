<?php
 
if(isset($_POST['submit'])){
    if(!empty($_FILES['upload']['name'])){

        $allow_ext=array('png','jpg','jpeg','gif');

        if(!empty($_FILES['upload']['name'])){
            $file_name=$_FILES['upload']['name'];
            $file_size=$_FILES['upload']['size'];
            $file_tmp=$_FILES['upload']['tmp_name'];
            $target_dir="uploads/$file_name";

            $file_ext=explode('.',$file_name);
            $file_ext=strtolower(end($file_ext));

            if(in_array($file_ext,$allow_ext)){
                if($file_size<=1000000){
                    move_uploaded_file($file_tmp, $target_dir);

                    $message='<p style="color:green;"> file uploaded successfully</p>';
                }
        }else{
            $message='<p style="color:red;"> Invalid file type</p>';
        }
    }else{
        $message='<p style="color:red;"> please choose a file</p>';
    }
}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>file upload</title>
    </head>
    <body>
        <?php echo $message ?? null;?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>"
        method="POST" enctype="multipart/form-data">
       select image to upload:
       <input type="file" name="upload"><br/>
       <input type="submit" value="Submit" name="submit">
    </form>
    </body>
</html>