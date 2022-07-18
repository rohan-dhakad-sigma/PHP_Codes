<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
//   array_shift();
     print("<strong> array_shift(); <strong/> <br> ");
     $stack = array("orange", "banana", "apple", "raspberry");
     $fruit = array_shift($stack);
     print_r($stack);
     echo $fruit;

//   array_pop();
     print("<br> <strong> array_pop(); <strong/> <br> ");
     $stack = array("orange", "banana", "apple", "raspberry");
     $fruit = array_pop($stack);
     print_r($stack);
     echo $fruit;
     print "\n";

//   array_unshift($stack, "Grapes", "Papaya")
     print("<br> <strong> array_pop(); <strong/> <br> ");
     $stack = array("orange", "banana", "apple", "raspberry");
     $fruit = array_unshift($stack, "Grapes", "Papaya");
     print_r($stack);
     echo "<br>";

//   print_r();
     $a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
     print_r ($a);
     echo "<br>";

//   array_push();
     print("<br> <strong> array_push(); <strong/> <br> ");
     $stack = array("orange", "banana", "apple", "raspberry");
     $fruit = array_push($stack, "Grapes", "Papaya");
     print_r($stack);
     echo "<br>";

//   sort(), rsort();
     $fruits = array(35,"lemon",20,"orange",19,"banana",37,"apple");
     echo "<br> Array before Sorting: <br> ";
     print_r($fruits);
     SORT($fruits);
     echo "<br> Array after Sorting: <br>";
     print_r($fruits);
     echo "<br>";

//   array_merge();
     print("<br>");
     $arr1 = array("orange", "banana", "apple", "raspberry");
     $arr2 = array(10,11,26,37,"Bus","Car");
     print("<br> Array1: <br> ");
     print_r($arr1);
     print("<br> Array2: <br> ");
     print_r($arr2);
     $result = array_merge($arr1,$arr2);
     print("<br> <br> After Merging both arrays: <br>  ");
     for ($i=0; $i < count($result); $i++)
   {
      print ("Element $i is $result[$i] <br>");
   }
echo "<br>";

//  shuffle($arr1):
    $arr1 = array("orange", "banana", "apple", "raspberry",10,11,26,37);
    shuffle($arr1);
    print_r($arr1);
    echo "<br> <br>";

//  array_slice($arr1,1,4);
    $arr1 = array("orange", "banana", "apple", "raspberry", "Bus", "Car", "Aeroplane");
    $result = array_slice($arr1,1,4);
    for ($i=0; $i < count($result); $i++)
    {
        print ("Element $i is $result[$i] <br>");
    }

//
    

?>

</body>
</html>