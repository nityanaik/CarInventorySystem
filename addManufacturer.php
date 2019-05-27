<?php
require_once 'Manufacturer.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $obj1 = new Manufacturer();
    $obj1->addManufacturer();
  }

?>

<html>
    <head>    
        <title>Add Manufacture Details</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
             <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="addManufacturer.php" class="active">Add Manufacturer</a></li>
                    <li><a href="addModel.php">Add Model</a></li>
                    <li><a href="viewInventory.php">View Inventory</a></li>
                </ul>
            </div>
        </nav>
        <div class="addBrand container">
            <form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "POST"  name = "form1">
            <br/>
                <label>
                    <h3>Add Manufacturer</h3> <input type="text" class="form-control" name="manufacturerName"/>
                </label>
                <br/>
                <input type="submit" value="Submit" name = "Submit" class="btn btn-info">
            </form>
        </div>
    </body>
</html>