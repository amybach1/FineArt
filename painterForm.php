    <?php
    
    include 'dbConnection.php';
    
    //Check if a Painter_ID was supplied in the URL Query Parameter
    if (isset($_GET['Painter_ID'])) {
        
        $Painter_ID = $_GET['Painter_ID'];
        
        //Query DB for details on that painter
        $PainterSQL = "SELECT * FROM Painters where id = $Painter_ID";
        $Painter =  $conn->query($PainterSQL)->fetch_assoc();
    }
        
    include 'head.php'
    ?>

      <div class="form">
        <form action="addPainter.php" method="post" class="form-signin">
          <h1 class="form-signin-heading">Enter Painter</h1>
  
          <label for="name">Name:</label>
          <input type="text" name="name" class="form-control" <?php if (isset($Painter['name'])) echo "value='" . $Painter['name'] . "'"; ?> />
  
          <label for="age">Age:</label>
          <input type="text" name="age" class="form-control" <?php if (isset($Painter['age'])) echo "value='" . $Painter['age'] . "'"; ?>/>
  
          <label for="country">Country:</label>
          <input type="text" name="country" class="form-control" <?php if (isset($Painter['country'])) echo "value='" . $Painter['country'] . "'"; ?>"/>
  
          <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
        </form>
      </div>
        <?php include 'foot.php' ?>