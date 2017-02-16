<?php
include 'dbConnection.php';
$model = $_POST['model'];
$year = $_POST['year'];
$horsepower = $_POST['horsepower'];
$drivetrain = $_POST['drivetrain'];
$sql = "INSERT INTO models (model, year, horsepower, drivetrain)
VALUES ('$model', '$year', '$horsepower', '$drivetrain')";
?>

<!DOCTYPE html>
<html lang="en">
  
  <?php include 'header.php';  ?>

  <body>
    <?php include 'nav.php' ?>
    <div class="container">
      <div class="starter-template">
      <?php
        if ($conn->query($sql) === TRUE) {
            echo "<h1>New record created successfully</h1> <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
      ?>


      Model: <?php echo $model ?><br>
      Year: <?php echo $year ?><br>
      Horsepower: <?php echo $horsepower ?><br>
      Drivetrain: <?php echo $drivetrain ?><br>

    </div>
  </body>
</html>

