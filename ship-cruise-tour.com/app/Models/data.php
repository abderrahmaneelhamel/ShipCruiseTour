<?php session_start();

require("../../autoloader.php");
class data{
    function data(){
            $costumer = $_SESSION["user-id"];
            $cruise = isset($_POST["cruise"]) ? $_POST["cruise"] : null;
            $price = isset($_POST["price"]) ? $_POST["price"] : null;
            if(isset($_POST["room"])){
                $room = $_POST["room"];
                switch($room){
                    case 1 :
                        $price += 0;
                        break;
    
                    case 2 :
                        $price += 100;
                        break;
                        
                    case 3 :
                        $price += 200;
                        break;

                    case 4 :
                        $price += 300;
                        break;

                    default :
                        $price +=0;
                        break; 
                }
            }else{
                $room = null;
            }
            $dateOfReservation = date("Y-m-d");
            $add = new addNew;
            $add->book($costumer,$cruise,$price,$dateOfReservation,$room);
            echo 'good';
    }
}
$start = new data;
$start->data();

