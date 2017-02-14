<?php
include 'dbConnection.php';

$sql = 'SELECT * FROM Paintings JOIN Painters ON Paintings.Painter_ID = Painters.ID';
$result = $conn->query($sql);

?>

    <?php include 'head.php' ?>

            <h1> Painters and Paintings</h1>
            <?php
                //output data of each row
                while ($row = $result->fetch_assoc()) {
                   echo " Painter: " . $row['name'] . " | Age: " . $row['age'] . " | Country: " . $row['country'] . " | Painting: " . $row['title'] . " | Type: " . $row['type'] . "<br>";
                }
            ?>
         </div>
    </body>
</html>
