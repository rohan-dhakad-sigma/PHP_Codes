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

// die("execute till here");

// User Table is creating
$sql = "CREATE TABLE User (
  id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstName VARCHAR(30) NOT NULL,
  lastName VARCHAR(30) NOT NULL,
  email VARCHAR(30)
  )";


if($conn->query($sql) === TRUE)
{
    echo '<br>';
    echo "Table Created Successfully";
}
else
{
    echo '<br>';
    echo "Error in creating Table: " .$conn->error;
}


?>