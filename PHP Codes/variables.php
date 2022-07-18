<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

 <?php

   $testString = "3.5 seconds";
   $testDouble = 79.8;
   $testInteger = 65;
 ?>

 <br/>

 <?php
   print(" $testString is a string");
 ?>
 <br/>

 <?php
 print(" $testInteger is a Integer");
 ?>
<br />

 <?php
 print(" $testDouble is a double <br/> <br/>");
 ?>

 <?php
  // Call Function setType to convert variable testString to different types.

  print("$testString");
  settype( $testString, "double");
  print(" as a double is $testString <br/>");

  print("$testString");
  settype( $testString, "integer");
  print(" as an integer is $testString <br/>");

 print("Final result is $testString <br/> <br/>");
 ?>


 <?php
 // Using Typecasting
   $data = "98.6 degrees";
   print("Now using type casting instead: <br/> 
          As a String- ".(string)$data. "<br/> 
          As a double - ".(double)$data.  "<br/> 
          As an integer - ".(integer)$data);
 ?>

</body>
</html>