<?php

 echo ("<strong> Creating the first array: </strong> <br>  ");
 // Assigning values using indices
 $first[0] = "zero";
 $first[1] = "one";
 $first[2] = "two";
 $first[] = "Three";

 for ($i=0; $i < count($first); $i++)
 {
     print ("Element $i is $first[$i] <br>");
 }
 echo ("Total no. of element in First array is ".count($first). "<br> <br>");

 // Create second array using array() function
 echo ("<strong> Create second array using array() function: <strong/> <br>");
 $second = array("Desktop","Laptop","Mobile","Iphone","Blackberry",5.87);

 for ($i=0; $i < count($second); $i++)
 {
    print ("Element $i is $second[$i] <br>");
 }
 echo ("Total no. of element in Second array is ".count($second). "<br> <br>");

 // Associative Array:
 print("<strong> Associative Array: <strong/> <br>");
 $third["Arctic"] = 21;
 $third["Lunatic"] = 25;
 $third["Glant"] = 29;

 for (reset($third); $element = key($third); next($third))
 {
     print ("$element is $third[$element] <br>");
 }
 print ("<br>");

 // Associative Array using array() and =>
 print("<strong> Associative Array using array() and =>: <strong/> <br>");

 $fourth = array(
     "January" => "first",  "February" => "second",
     "March" => "third",  "April" => "fourth",
     "May" => "fifth",  "June" => "sixth",
     "July" => "seventh",  "August" => "eighth",
     "October" => "ninth",  "November" => "tenth"
 );

 foreach( $fourth as $element => $value)
{
    print ("$element is the $value month <br>");
}

 print "Size of fourth array is: " . sizeof($fourth);

?>