<?php
include 'dbConnection.php';

//Brewery Query for Related data dropdown
$sql = "SELECT ID, name FROM Brands";

$Brands = $conn->query($sql);


include 'header.php';
?>
    <body>
        <?php include 'nav.php';  ?>
        <div class="container">
            <form action="addModel.php" method="post" class="form-signin">
                <h1 class="form-signin-heading">Enter Model</h1>

                <label for="Brand_id">Brands:</label>
                <select name="Brand_id">
                <?php
                if ($Brands->num_rows > 0) {
                    // output data of each row
                    while($Brand = $Brands->fetch_assoc()) {
                        echo "<option value='" . $Brand["ID"] ."'";
                        echo ">" . $Brand["name"] . "</option>";
                    }
                }
                ?>
                </select>
                <div>

                    <label for="model">Model:</label>
                    <input type="text" name="model" class="form-control"/>
            
                    <label for="year">Year:</label>
                    <input type="text" name="year" class="form-control"/>
            
                    <label for="horsepower">Horsepower:</label>
                    <input type="text" name="horsepower" class="form-control"/>
            
                    <label for="drivetrain">Drivetrain:</label>
                    <input type="text" name="drivetrain" class="form-control"/>
            
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
                 </div>
                
            </form>    
        </div>    
    </body>
</html>