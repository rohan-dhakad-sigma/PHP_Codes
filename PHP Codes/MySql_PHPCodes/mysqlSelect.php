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

$select_record1 = "SELECT * FROM posts ORDER BY post_Id ASC LIMIT 3 OFFSET 2";

$select_record2 = "SELECT * FROM posts WHERE `post_Id` IN(2,3,4)";

$select_record3 = "SELECT * FROM posts ORDER BY `post_Name` ASC ";

$result = $conn->query($select_record1);


// print_r($result);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Id: " . $row["post_Id"]. " - Post_Name: " . $row["post_Name"]. " - Post_Description: " . $row["post_Description"]. "<br>";
    }
} else {
    echo "0 results";
}

?>