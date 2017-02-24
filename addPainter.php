<?php

include 'dbConnection.php';

$name = $_POST['name'];
$age = $_POST['age'];
$country = $_POST['country'];

if (isset($_POST['Painter_ID'])) {
    $Painting_ID = $_POST['Painter_ID'];
    $sql =  "UPDATE Painters SET name='$name', age='$age', country='$country'
             WHERE id = $Painter_ID";
}             
else {
   $sql = "INSERT INTO Painters (name, age, country)
VALUES ('$name', '$age', '$country')";
} 

 include 'head.php' ?>
  
      <div class="starter-template">
      <?php
        if ($conn->query($sql) === TRUE) {
            echo "<h1>Success!</h2> <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
      ?>

      <p>Name:</p> <?php echo $name ?><br>
      <p>Age:</p> <?php echo $age ?><br>
      <p>Country:</p> <?php echo $country ?><br>
   
    <?php include 'foot.php' ?>