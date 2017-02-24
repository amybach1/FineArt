<?php
include 'dbConnection.php';

$sql = "SELECT
        Paintings.ID as Painting_ID, Paintings.title as PaintingTitle, type, style, 
        Painters.name as PainterName, age, country
        FROM Paintings JOIN Painters ON Painters.ID = Paintings.Painter_ID";

$result = $conn->query($sql);

include 'head.php'
?>
            <h1> Welcome to the Fine Art Database!</h1>
            <p>This database includes painters and paintings from European Fine Art. Feel free to add and update the database with correct information.</p>
            <br>

        <ul>
            <li><a href="painters.php">See Painters</a> </li>
            <li><a href="paintings.php">See Paintings</a> </li>
            <li><a href="painterForm.php">Enter Painter</a></li>
            <li><a href="paintingForm.php">Enter Painting</a></li>
        </ul>

    <?php include 'foot.php' ?>