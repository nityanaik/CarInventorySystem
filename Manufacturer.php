
<?php
include_once("Crud.php");

class Manufacturer extends Crud{

    public function addManufacturer(){
        if (isset($_POST['Submit'])) {

            $name = $this->escape_string($_POST['manufacturerName']);
            $msg = $this->check_empty($_POST, array('manufacturerName'));
            
            if($msg != null) {
                echo "<script type='text/javascript'>alert('Add Manufacturer Name'); </script>";
            }else { 
                $count = $this->number_of_rows("SELECT * FROM manufacturer where mname = '$name'");
               
                if($count > 0 ){
                    echo "<span color='red'><script type='text/javascript'>alert('Manufacturer Name already Present in database!!!!!'); </script></span>";
                }else{
                    $result = $this->execute("INSERT INTO manufacturer(mname) VALUES('$name')");
                    echo "<script type='text/javascript'>alert('Manufacturer Name added successfully to Database!!!!! </script>";
                }
            }
        }
        // exit();
    }
}



?>
