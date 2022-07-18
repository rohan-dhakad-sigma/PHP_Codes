<?php

//Create Connection
$conn = new mysqli("localhost","admin","admin","php_training_demo");

// Check Connection
if ($conn->connect_error)
{
    die("Connection failed: " .$conn->connect_error);
}

echo "connected successfully";
echo "</br>";

$sql = "UPDATE posts SET post_Name='two(s) record posts' WHERE `post_Id`=2";

if($conn->query($sql) === TRUE)
{
    echo '<br>';
    echo "Record Updated Successfully";
}
else
{
    echo '<br>';
    echo "Error updating record:: " .$conn->error;
}
?>