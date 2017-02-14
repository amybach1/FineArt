<?php
include 'dbConnection.php';

//Query for related data dropdown
$sql = "SELECT ID, name FROM Painters";

$Painters = $conn->query($sql);


include 'head.php'
?>


      <h1 class="form-signin-heading">Add Painting</h1>
    
      <form action="addPainting.php" method="post" class="form-signin">
        <label for="Painting_ID">Name of Painter:</label>
            <select name="Painter_ID">
                <?php
                  if ($Painters->num_rows > 0) {
                  // output data of each row
                  while($Painter = $Painters->fetch_assoc()) {
                    echo "<option value='" . $Painter["ID"] ."'";
                    echo ">" . $Painter["name"] . "</option>";
                    }
                  }
                ?>
                
            </select>
  
        <div>
          <label for="title">Title of Painting:</label>
          <input type="text" name="title" class="form-control"/>
        </div>
        
        <div>
          <label for="type">Type of Painting:</label>
          <input type="text" name="type" class="form-control"/>
        </div>
        
        <div class="button">
          <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>