<?php
include 'dbConnection.php';

//Brewery Query for Related data dropdown
$sql = "SELECT id, name FROM Brands";

$brands = $conn->query($sql);


include 'header.php';
?>

<form action="addModel.php" method="post" class="form-signin">
    
    <label for="brands_id">Brands:</label>
    
              <select name="brewery_id">
                <?php
                if ($brands->num_rows > 0) {
                    // output data of each row
                    while($brands = $brands->fetch_assoc()) {
                        echo "<option value='" . $brands["id"] ."'";
                        echo ">" . $brewery["name"] . "</option>";
                    }

                }
                ?>
              </select>

</form>    


        </div>    
    </body>
</html>