<?php
    include_once "Crud.php";

    Class Model extends Crud{
        public function save_model_details(){
            if (isset($_POST['Submit'])) {

                $model_name = $this->escape_string($_POST['modelname']);
                $manu_name = $_POST['manu_name'];
                $msg = $this->check_empty($_POST, array('modelname'));
                if(!isset($_POST['manu_name'])){
                    echo "<script type='text/javascript'>alert('Please Select the Manufacturer Name'); </script>";
                }                
                else if($msg != null) {
                    echo "<script type='text/javascript'>alert('Please add the Car Model Name'); </script>";
                }else { 
                        $result = $this->execute("INSERT INTO Model(modelname,manu_name) VALUES('$model_name','$manu_name')");
                        echo "<script type='text/javascript'>alert('Car Model added successfully'); </script>";
                }
            }
        }
    }
?>
