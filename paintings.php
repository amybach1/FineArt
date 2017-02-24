<?php
include 'dbConnection.php';

$sql = "SELECT
        Paintings.ID as Painting_ID, Paintings.title as PaintingTitle, type, style, 
        Painters.name as PainterName, age, country
        FROM Paintings JOIN Painters ON Painters.ID = Paintings.Painter_ID";

$result = $conn->query($sql);

include 'head.php'
?>
            <h1> Paintings</h1>
            <li><a href="paintingForm.php">Enter Painting</a></li>
            <table class="table">
               <thead class="thead-inverse">
                  <tr>
                     <th>Painting Title</th>
                     <th>Type</th>
                     <th>Style</th>
                     <th>Painter</th>
                     <th>Age</th>
                     <th>Country</th>
                     <th></th>
                     <th></th>
                  </tr>
               </thead>
               
               <tbody>
                    <?php
                        //output data of each row
                        while($row = $result->fetch_assoc()) {
                           echo "<tr><td> ". $row['PaintingTitle'] . " </td> <td>" . $row['type'] . " </td> <td> " . $row['style'] . 
                           " </td> <td> " . $row['PainterName'] . " </td> <td> " . $row['age'] . " </td> <td> " . $row['country'] . 
                           " </td> <td> <a href=deletePainting.php?Painting_ID=" . $row['Painting_ID']  .">delete</a> <br>" ,
                           " </td> <td> <a href=paintingForm.php?Painting_ID=" . $row['Painting_ID']  .">update painting info</a> </td></tr>";
                            }
                    ?>
               </tbody> 
            </table>
    <?php include 'foot.php' ?>