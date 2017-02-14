    <?php include 'head.php' ?>

      <form action="addPainter.php" method="post" class="form-signin">
        <h1 class="form-signin-heading">Add Painter</h1>

        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control"/>

        <label for="age">Age:</label>
        <input type="text" name="age" class="form-control"/>

        <label for="country">Country:</label>
        <input type="text" name="country" class="form-control"/>

        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>

      </form>
    </div>
  </body>
</html>