<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    $myString = "Sigma is a good company to work in";
    print $myString[11];
    echo "<br> <br>";

// str_replace("company","Organisation",$str);
    $str = "Sigma is a good company to work in";
    $str1 = str_replace("company","Organisation",$str);
    echo $str1;
    print("");
    print("The length of a string is: " + strlen($str));
    echo "<br> <br>";

//  strtoupper($str);
    $str = "Sigma is a good company to work in";
    echo strtoupper($str);
    echo "<br> <br>";

//  strtolower($str);
    $str = "SIGMA IS A GOOD COMPANY TO WORK IN ";
    echo strtolower($str);
    echo "<br> <br>";

//  strstr($str,"good");
    $str = "Sigma is a good company to work in";
    echo strstr($str,"good");
    echo "<br> <br>";

//  ucfirst($str);
    $str = "sigma is a good company to work in";
    echo ucfirst($str);
    echo "<br> <br>";

//  lcfirst($str);
    $str = "SIGMA IS A GOOD COMPANY TO WORK IN";
    echo lcfirst($str);
    echo "<br> <br>";

//  ucwords($str);
    $str = "sigma is a good company to work in";
    echo ucwords($str);
    echo "<br> <br>";

//  trim($str,"Hed!");
    $str = "Hello World!";
    echo $str . "<br>";
    echo trim($str,"Hed!");
    echo "<br> <br>";

//  substr($str,7,10);
    $str = "Sigma is a good company to work in";
    echo substr($str,7,10);

//
    

?>

</body>
</html>
