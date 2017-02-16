<?php
include 'dbConnection.php';
$name = $_POST['name'];
$founders = $_POST['founders'];
$country = $_POST['country'];
$sql = "INSERT INTO Brands (name, founders, country)
VALUES ('$name', '$founders', '$country')";
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


      Brand: <?php echo $name ?><br>
   
      Founders: <?php echo $founders ?><br>
      Country of Origin: <?php echo $country ?><br>

    </div>
  </body>
</html>