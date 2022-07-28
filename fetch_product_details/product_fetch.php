<?php

class Fetch_Product
{
    //Create Connection

function fetch_detail()
{
    $conn = new mysqli("localhost","admin","admin","Fashion_Club");

// Check Connection
    if ($conn->connect_error)
    {
        die("Connection failed: " .$conn->connect_error);
    }
    echo "</br>";

    $sql = "SELECT * FROM products ";

    $result = $conn->query($sql);


// print_r($result);

    if ($result->num_rows > 0)
    {?>
        <table border='1'>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Image</th>
            <th>Product Short Description</th>
            <th>Product Long Description</th>
            <th>Product Price</th>

        <?php
        while($row = $result->fetch_assoc())
        { ?>
            <tr>
                <td> <?php echo $row['ProductID']; ?></td>
                <td> <?php echo $row['ProductName']; ?></td>
                <td> <img src="data:image/jpg;charset=utf8;base64,
                     <?php echo base64_encode($row['ProductImage']); ?>"> </td>
                <td> <?php echo $row['ProductShortDesc']; ?></td>
                <td> <?php echo $row['ProductLongDesc'] ?> </td>
                <td> <?php echo $row['ProductPrice']; ?></td>
                </tr>

        <?php
        } // while closing brace
       }
    else
    {
        echo "Product does not exists";
    }
}

}

?>