<?php
include 'dbConnection.php';

//Query for related data dropdown
$sql = "SELECT ID, name FROM Painters";

$Painters = $conn->query($sql);

//Check if a Painting_ID was supplied in the URL Query Parameter
if (isset($_GET['Painting_ID'])) {
    
    $Painting_ID = $_GET['Painting_ID'];
    
    //Query DB for details on that painting
    $PaintingSQL = "SELECT * FROM Paintings where id = $Painting_ID";
    $Painting =  $conn->query($PaintingSQL)->fetch_assoc();
}
    
include 'head.php'
?>

      <h1 class="form-signin-heading">Enter Painting</h1>
        <div class="form">
            <form action="addPainting.php" method="post" class="form-signin">
              <?php if(isset($Painting_ID)) echo "<input type='hidden' name='Painting_ID' value=" . $Painting_ID ." >"; ?>
              <label for="Painting_ID">Name of Painter:</label>
                  <select name="Painter_ID">
                      <?php
                        if ($Painters->num_rows > 0) {
                        // output data of each row
                        while($Painter = $Painters->fetch_assoc()) {
                          echo "<option value='" . $Painter["ID"] ."'";
                          if (isset($Painting['Painter_ID']) and  $Painting['Painter_ID'] == $Painter["ID"]) echo "selected";
                          echo ">" . $Painter["name"] . "</option>";
                          }
                        }
                      ?>
                      
                  </select>
        
              <div>
                <label for="title">Title of Painting:</label>
                <input type="text" name="title" class="form-control" <?php if (isset($Painting['title'])) echo "value='" . $Painting['title'] . "'"; ?> />
              </div>
              
              <div>
                <label for="type">Type (medium) of Painting:</label>
                <input type="text" name="type" class="form-control" <?php if (isset($Painting['type'])) echo "value='" . $Painting['type'] . "'"; ?> />
              </div>
              
              <div>
                <label for="style">Style of Painting:</label>
                <input type="text" name="style" class="form-control" <?php if (isset($Painting['style'])) echo "value='" . $Painting['style'] . "'"; ?> />
              </div>
              
              <div class="button">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
              </div>
            </form>
        </div>
        <?php include 'foot.php' ?>