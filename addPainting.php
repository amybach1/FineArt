<?php

include 'dbConnection.php';

$title = $_POST['title'];
$Painter_ID = $_POST['Painter_ID'];
$type = $_POST['type'];
$style = $_POST['style'];

if (isset($_POST['Painting_ID'])) {
    $Painting_ID = $_POST['Painting_ID'];
    $sql =  "UPDATE Paintings SET title='$title', style='$style', type = '$type', 
             Painter_ID='$Painter_ID'
             WHERE id = $Painting_ID";
}             
else {
    $sql = "INSERT INTO Paintings (title, Painter_ID, type, style)
  VALUES ('$title', '$Painter_ID', '$type', '$style')";
}  

include 'head.php';

 if ($conn->query($sql) === TRUE) {
          echo "<h2 class='form-signin-heading''>Success!</h2> <br>";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
       ?>

      Painting: <?php echo $title ?><br>
      Type: <?php echo $type ?><br>
      Painter: <?php echo $Painter_ID ?><br>
      Style: <?php echo $style ?> <br>

      </div>
        <?php include 'foot.php' ?>