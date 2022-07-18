<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $str = array("One","Two","Three","Four","Five","six","seven","eight","nine","ten",
            "Eleven","Twelve","Thirteen","Fourteen","Fifteen","Sixteen","Seventeen",
            "Eighteen","Nineteen","Twenty");
    $random = rand(0,200);
    ini_set("display_errors",1);
    echo($str[$random]);
?>

</body>
</html>