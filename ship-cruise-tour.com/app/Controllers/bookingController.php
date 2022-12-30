<?php
class bookingController {
    function booking(){
        if (isset($_POST['submit'])) {
            $costumer = $_SESSION["user-id"];
            $cruise = isset($_POST["cruise"]) ? $_POST["cruise"] : null;
            $price = isset($_POST["price"]) ? $_POST["price"] : null;
            $place = isset($_POST["place"]) ? $_POST["place"] : null;
            if(isset($_POST["room"])){
                $room = $_POST["room"];
                switch($room){
                    case 1 :
                        $price += 0;
                        $capacity = 1;
                        break;
    
                    case 2 :
                        $price += 100;
                        $capacity = 2;
                        break;
                        
                    case 3 :
                        $price += 200;
                        $capacity = 6;
                        break;

                    case 4 :
                        $price += 300;
                        $capacity = 2;
                        break;

                    default :
                        $price +=0;
                        $capacity = 1;
                        break; 
                }
            }else{
                $room = null;
            }
            $dateOfReservation = date("Y-m-d");
            $add = new addNew;
            $result = $add->updateplace($place,$capacity);
            if($result == false){
                return 0;
            }elseif($result == true){
                $add->book($costumer,$cruise,$price,$dateOfReservation,$room);
                $add->room($place,$price,$room,$capacity);
                return 1;
            }
        }
    }
    
}