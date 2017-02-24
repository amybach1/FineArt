<?php

include 'dbConnection.php';

$Painting_ID = $_GET['Painting_ID'];

$sql = "DELETE FROM Paintings WHERE id=$Painting_ID";

$result = $conn->query($sql);

include 'head.php';

     if ($conn->query($sql) === TRUE) {
        echo "Painting deleted successfully";
    } else {
        echo "There was an issue deleting the painting: " . $conn->error;
    }
    $conn->close();
?>
<?php include 'foot.php' ?>