<!DOCTYPE html>
<html>
<body>

<?php

    //fopen("webdictionary.txt", "r");
    //fread($myfile,filesize("webdictionary.txt"));
    //filesize("webdictionary.txt");

    /* $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("webdictionary.txt"));
    echo "<br> <br>";
    echo filesize("webdictionary.txt");
    fclose($myfile); */

//  fgets($myfile);
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);

?>

</body>
</html>