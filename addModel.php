<?php
    include_once 'Model.php';

    $modelObject = new Model();
    $query = "SELECT mname FROM manufacturer ORDER BY mname DESC";
    $result = $modelObject->getData($query);
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $modelObject->save_model_details();
      }
    

?>
<html>
    <head>    
        <title>Add Car Model Name</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
             <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="addManufacturer.php">Add Manufacturer</a></li>
                    <li><a href="addModel.php" class="active">Add Model</a></li>
                    <li><a href="viewInventory.php">View Inventory</a></li>
                </ul>
            </div>
        </nav>

        <div class="addModelName form-group ">
            <form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "POST"  name = "form2">
            <br/>
                <label>
                    <h3>Model Name <span color="red">*</span></h3> <input type = "text" name = "modelname" placeholder="Enter Car Model Name"/>
                </label>
                <select name = "manu_name" class="form-control">
                <option value = " " disabled selected>Select Manufacturer</option>
                <?php
                    
                    foreach ($result as $key => $res) { 
                            echo "<option value = '". $res['mname'] ."'>". $res['mname'] ."</option>" ;      
                        }
                ?>
                </select>
                <br/>
                <input type="submit" name="Submit" class="btn btn-info"/>
            </form>
        </div>
    </body>
</html>
