<?php

include 'dbConnection.php';

$title = $_POST['title'];
$Painter_ID = $_POST['Painter_ID'];
$type = $_POST['type'];

$sql = "INSERT INTO Paintings (title, Painter_ID, type)
  VALUES ('$title', '$Painter_ID', '$type')";

include 'head.php';

 if ($conn->query($sql) === TRUE) {
          echo "<h2 class='form-signin-heading''>You have successfully added a painting to the database!</h2> <br>";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
       ?>

      Painting: <?php echo $title ?><br>
      Type: <?php echo $type ?><br>
      Painter: <?php echo $Painter_ID ?><br>

      </div>
    </div>
  </body>
</html>