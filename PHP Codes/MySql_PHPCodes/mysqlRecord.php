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

// Inserting records to table posts
$sql = "INSERT INTO posts (post_Id,post_Name,post_Description)
        VALUES (3,'Third record post','A paragraph is a self-contained unit of discourse in writing.')";

// Condition to check if record inserted successfully or not.
if($conn->query($sql) === TRUE)
{
    echo '<br>';
    echo "Record inserted Successfully";
}
else
{
    echo '<br>';
    echo "Error in inserting record: " .$conn->error;
}

?>