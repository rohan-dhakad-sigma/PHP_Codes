<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php

 $myfile = fopen("testfile.txt", "w") or die("Unable to open file!");
 $txt = "I am a King\n";
 fwrite($myfile, $txt);
 $txt = "I am a queen\n";
 fwrite($myfile, $txt);
 fclose($myfile);
 ?>

</body>
</html>
