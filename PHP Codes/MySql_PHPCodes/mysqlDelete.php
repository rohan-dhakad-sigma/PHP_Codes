<?php

//Create Connection
$conn = new mysqli("localhost","admin","admin","php_training_demo");

// Check Connection
if ($conn->connect_error)
{
    die("Connection failed: " .$conn->connect_error);
}

echo "connected successfully";
echo "</br> </br>";

$sql = "DELETE FROM posts WHERE `post_Id`=5";

if($conn->query($sql) === TRUE)
{
    echo '<br>';
    echo "Record Deleted Successfully";
}
else
{
    echo '<br>';
    echo "Error in Deleting record: " .$conn->error;
}
?>