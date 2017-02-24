<?php

include 'dbConnection.php';

$Painter_ID = $_GET['Painter_ID'];

$sql = "DELETE FROM Painters WHERE id=$Painter_ID";

$result = $conn->query($sql);

include 'head.php';

     if ($conn->query($sql) === TRUE) {
        echo "Painter deleted successfully";
    } else {
        echo "There was an issue deleting the painter: " . $conn->error;
    }
    $conn->close();

include 'foot.php' ?>
