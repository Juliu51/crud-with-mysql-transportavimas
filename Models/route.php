<?php 

include("../../Models/DB.php");


class Routes {
    public $id;
    public $adress;
    public $weight;
    public $tel;
    public $route_id;
    
    
    public static function all() {
        $conn = connection();
            $sql = 'SELECT * FROM `route` WHERE route_id ='.$_GET['id'];
            $result = $conn->query($sql);
            
            $all = [];
        while($row = $result->fetch_assoc()) {
            $route = new Routes();
            $route->id = $row['id'];
            $route->adress = $row['adress'];
            $route->weight = $row['weight'];
            $route->tel = $row['tel'];
            $route->route_id  = $row['route_id'];
            $all[] = $route;
        }
        $conn->close();
        
        return $all;
    }
    public static function find($id) {
            $sql = 'SELECT * FROM `route` where id = '.$id;
            $conn = connection();
            $result = $conn -> query($sql);
            $conn->close();
            $resultroute = $result->fetch_assoc();

            $route = new Routes();
            $route->id = $resultroute['id'];
            $route->adress = $resultroute['adress'];
            $route->weight = $resultroute['weight'];
            $route->tel = $resultroute['tel'];
            $route->route_id = $resultroute['route_id'];

            return $route;
        }
    

public static function store() {
    $conn = connection();
    $sql = "INSERT INTO `route`(`id`, `adress`, `weight`, `tel` , `route_id`) 
    VALUES (NULL,'".$_POST['adress']."','".$_POST['weight']."','".$_POST['tel']."' ,'".$_GET['id']."');";
  
    $conn -> query($sql);
     $conn->close(); 
}    

public static function update() {
    $conn = connection();
        $sql = 'UPDATE `route` SET `adress`="'.$_POST['adress'].'",`weight`="'.$_POST['weight'].'",`tel`="'.$_POST['tel'].'" WHERE `route_id` = '.$_POST['id'];
        $conn -> query($sql);
        $conn->close();
}
public static function destroy($id){
    $conn=connection();
        $sql = 'DELETE FROM `route` WHERE id ='.$id;
        $conn->query($sql);
        $conn->close();
    }
}

