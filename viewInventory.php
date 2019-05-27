<?php
    include_once 'Model.php';
    include_once("Crud.php");
 
    $crud = new Crud();
    $query = "SELECT manu_name mname, modelname model, COUNT(*) AS num FROM Model GROUP BY modelname,manu_name;";
    $result = $crud->getData($query);
?>

<html>
    <head>    
        <title>View Inventory</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src = "view.js"></script>
    </head>
    
    <body>
        <nav class="navbar navbar-inverse">
             <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="addManufacturer.php">Add Manufacturer</a></li>
                    <li><a href="addModel.php">Add Model</a></li>
                    <li><a href="viewInventory.php" class="active">View Inventory</a></li>
                </ul>
            </div>
        </nav>
    <div class="viewInvetory">
        <table width='80%' class="table borderless">
        <thead class="thead-dark">
            <tr>
                <td >Model Name</td>
                <td>Manufacturer Name</td>
                <td>Count</td>
                <td>Sell Car</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                if($result == false){
                    echo "<tr>";
                    echo "<td colspan='4'><h3>Sorry No Cars in Inventory!!!!!!</h3></td>";
                    echo "</tr>";
                }
                foreach ($result as $key => $res) {    
                    $key1 = $key+1;  
                    echo "<tr>";
                    echo "<td>".$res['mname']."</td>";
                    echo "<td id = 'modelname'>".$res['model']."</td>";
                    echo "<td class = 'count'>".$res['num']."</td>";    
                    echo "<td><input type =\"button\"  class= \"button1 btn btn-primary active\" value =\"Sell\"  name=\"soldCar\" id ='".$res['model']."' modelname ='".$res['model']."' count= '".$res['num']."'></td>";  
                    echo "</tr>";
                }
            ?>
            <tbody>
        </table>
        </div>
    </body>
</html>

