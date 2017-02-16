<!DOCTYPE html>
<html lang="en">
  <?php include 'header.php';  ?>
    <body>
      
        <?php include 'nav.php' ?>
        <div class="container">
          
          
      <form action="addModel.php" method="post" class="form-signin">
        <h1 class="form-signin-heading">Enter Model</h1>

        <label for="model">Model:</label>
        <input type="text" name="model" class="form-control"/>

        <label for="year">Year:</label>
        <input type="text" name="year" class="form-control"/>

        <label for="horsepower">Horsepower:</label>
        <input type="text" name="horsepower" class="form-control"/>

        <label for="drivetrain">Drivetrain:</label>
        <input type="text" name="drivetrain" class="form-control"/>

        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>

      </form>
    </div>
  </body>
</html>