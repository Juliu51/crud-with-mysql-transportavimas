<?php 

include("../../Models/DB.php");


class Invoices {
    public $id;
    public $start;
    public $stop;
    public $date;
    public $insured;
    
    
    public static function all() {
        $conn = connection();
            $sql = 'SELECT * FROM `inovaices` WHERE 1';
            $result = $conn->query($sql);
            
            $all = [];
        while($row = $result->fetch_assoc()) {
            $invoice = new Invoices();
            $invoice->id = $row['id'];
            $invoice->start = $row['start'];
            $invoice->stop = $row['stop'];
            $invoice->date = $row['date'];
            $invoice->insured  = $row['insured'];
            $all[] = $invoice;
        }
        $conn->close();
        return $all;
    }
    public static function find($id) {
            $sql = 'SELECT * FROM inovaices where id = '.$id;
            $conn = connection();
            $result = $conn -> query($sql);
            $conn->close();
            $resultinvoice = $result->fetch_assoc();

            $invoice = new Invoices();
            $invoice->id = $resultinvoice['id'];
            $invoice->start = $resultinvoice['start'];
            $invoice->stop = $resultinvoice['stop'];
            $invoice->date = $resultinvoice['date'];
            $invoice->insured = $resultinvoice['insured'];

            return $invoice;
        }
    
    public function checkBoxActivation()
    {
        return ($this ->insured )? "checked" : "";
   
    }

public function store() {
    $checked = 0;
    if(isset($_POST['insured'])) {
        $checked = 1;
    }
    $conn = connection();
    $sql = "INSERT INTO `inovaices`(`id`, `start`, `stop`, `date` , `insured`) 
    VALUES (NULL,'".$_POST['start']."','".$_POST['stop']."','".$_POST['date']."' ,'$checked');";
    $conn -> query($sql);
     $conn->close(); 
}    

public function update() {
    $checked = 0;
    if(isset($_POST['insured'])) {
        $checked = 1;
    }
        $sql = 'UPDATE `inovaices` SET `start`="'.$_POST['start'].'",`stop`="'.$_POST['stop'].'",`date`="'.$_POST['date'].'",`insured`='.$checked.' WHERE id = '.$_POST['update'];
        $conn = connection();
        $conn -> query($sql);
        $conn->close();
}
public function destroy(){
        $sql = 'DELETE FROM `inovaices` WHERE `inovaices`.`id` = '.$_POST['delete'];
        $conn=connection();
        $conn->query($sql);
        
    }
}

