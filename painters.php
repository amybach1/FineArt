<?php
include 'dbConnection.php';

$sql = "SELECT
        ID, name, age, country
        FROM Painters";

$result = $conn->query($sql);

include 'head.php'
?>
            <h1> Painters</h1>
            <li><a href="painterForm.php">Enter Painter</a></li>
            <table class="table">
               <thead class="thead-inverse">
                  <tr>
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
                   echo "<tr><td> " . $row['name'] . " </td> <td> " . $row['age'] . " </td> <td> " . $row['country'] . 
                   " </td> <td> <a href=deletePainter.php?Painter_ID=" . $row['ID']  .">delete</a> <br>" ,
                   " </td> <td> <a href=painterForm.php?Painter_ID=" . $row['ID']  .">update painter info</a> </td></tr>";
                    }
                        ?>
               </tbody> 
            </table>
            
    <?php include 'foot.php' ?>