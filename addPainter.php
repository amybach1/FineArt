<?php
include 'dbConnection.php';
$name = $_POST['name'];
$age = $_POST['age'];
$country = $_POST['country'];
$sql = "INSERT INTO Painters (name, age, country)
VALUES ('$name', '$age', '$country')";
?>

  <?php include 'head.php' ?>
  
      <div class="starter-template">
      <?php
        if ($conn->query($sql) === TRUE) {
            echo "<h1>Your painter has been added to our Fine Art database!</h1> <hr> <h2>Thank you for your submission.</h2> <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
      ?>


      <p>Name:</p> <?php echo $name ?><br>
      <p>Age:</p> <?php echo $age ?><br>
      <p>Country:</p> <?php echo $country ?><br>

    </div>
  </body>
</html>