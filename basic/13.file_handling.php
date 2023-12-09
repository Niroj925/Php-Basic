<?php

$file='profile/user.txt';

if(file_exists($file)){
    // echo readfile($file); 
    $handle=fopen($file, 'r');
      $contents=fread($handle,filesize($file));
      fclose($handle);  
      echo $contents;
}else{
    $handle = fopen($file, 'w');

    if ($handle) {
        $contents = 'mero' . PHP_EOL . 'world';

        if (fwrite($handle, $contents) !== false) {
            echo "File written successfully!";
        } else {
            echo "Error writing to the file!";
        }

        fclose($handle);
    } else {
        echo "Error opening the file for writing!";
    }
}
?>