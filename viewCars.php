<?php
    include_once 'Model.php';
    include_once("Crud.php");
    $crud = new Crud();
    if(isset($_POST['carModel'])){
        $carModel = $_POST['carModel'];
        // echo "hello delete";exit();
        $query = "DELETE FROM Model WHERE modelnum IN (select modelnum from (select modelnum FROM Model where modelname = '".$carModel."' ORDER BY modelnum LIMIT 1) x)";
        $result = $crud->execute($query);
        echo $result;
    }
?>