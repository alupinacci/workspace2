<!DOCTYPE html>
<html lang="en">
  
  <?php include 'header.php';  ?>
    <body>
      
        <?php include 'nav.php' ?>
        <div class="container">
          
      <form action="addBrand.php" method="post" class="form-signin">
        
        <h1 class="form-signin-heading">Enter Brand</h1>

        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control"/>

        <label for="founders">Founders:</label>
        <input type="text" name="founders" class="form-control"/>

        <label for="country">Country of Origin:</label>
        <input type="text" name="country" class="form-control"/>

        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>

      </form>
    </div>
  </body>
</html>


