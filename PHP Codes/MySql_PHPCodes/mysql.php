<?php

//Create Connection
$conn = new mysqli("localhost","admin","admin");

// Check Connection
if ($conn->connect_error)
{
    die("Connection failed: " .$conn->connect_error);
}

echo "connected successfully";

// Create database
$sql = "CREATE DATABASE php_training_demo";

if($conn->query($sql) === TRUE)
{
    echo '<br>';
    echo "Database Created Successfully";
}
else
{
    echo '<br>';
    echo "Error in creating database: " .$conn->error;
}

?>