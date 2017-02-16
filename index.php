<?php
include 'dbConnection.php';

    $sql = "SELECT *
            FROM models
            JOIN Brands ON models.Brand_id = Brands.ID";

$result = $conn->query($sql); 
?>

<!DOCTYPE html>
<html lang="en">
  <?php include 'header.php';  ?>
    <body>
        <?php include 'nav.php';  ?>
        
        <div class="container">
            <h1> Brands </h1>
            
        <?php
           while($row = $result -> fetch_assoc()){
               echo $row['ID'] . " | " . $row['Name'] . " | " . $row['Country'] . " | " . $row['Founders'] . "<br>";
           }
           ?>
        </div>
        
    </body>
</html> 