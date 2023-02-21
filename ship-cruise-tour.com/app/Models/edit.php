<?php 

class edit {
    function edit($ship,$price,$image,$numOfNights,$portOfDeparture,$cruiseItinerary,$dateOfDeparture,$ID){
        if($image===""){
            $sql ="UPDATE `cruises` SET `ship`='$ship',`price`='$price',`num-of-nights`='$numOfNights',`port-of-departure`='$portOfDeparture',`cruise-itinerary`='$cruiseItinerary',`date-of-departure`='$dateOfDeparture' WHERE `id-cruise`= $ID" ;
        }else{
            $sql ="UPDATE `cruises` SET `ship`='$ship',`img`='$image',`price`='$price',`num-of-nights`='$numOfNights',`port-of-departure`='$portOfDeparture',`cruise-itinerary`='$cruiseItinerary',`date-of-departure`='$dateOfDeparture' WHERE `id-cruise`= $ID" ;
        }
        $test = new connection;
        $conn = $test->connection();
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function editR($price,$dateOfReservation,$room,$ID){
        $sql ="UPDATE `reservation` SET `reservation-date`='$dateOfReservation',`reservation-price`='$price',`room`='$room' WHERE `id`= $ID";
        $test = new connection;
        $conn = $test->connection();
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function list($ID){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT * FROM `cruises` WHERE `id-cruise` =$ID LIMIT 1";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function list1(){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT * FROM `ship`";
        $resultat1 = mysqli_query($conn,$sql);
        return $resultat1;
    }
    function list3(){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT * FROM `ship` AS S WHERE S.id NOT IN ( SELECT S.id FROM `ship` AS S JOIN `cruises` AS C ON S.id = c.ship );";
        $resultat1 = mysqli_query($conn,$sql);
        return $resultat1;
    }
    function list2(){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT * FROM `port`";
        $resultat2 = mysqli_query($conn,$sql);
        return $resultat2;
    }
    function listR($ID){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT * FROM `reservation` WHERE `id` =$ID LIMIT 1";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function listR1($ID){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT * FROM `clients`  WHERE `id` =$ID LIMIT 1";
        $resultat1 = mysqli_query($conn,$sql);
        return $resultat1;
    }
    function listR2(){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT * FROM `cruises`";
        $resultat2 = mysqli_query($conn,$sql);
        return $resultat2;
    }
    function listR3(){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT * FROM `category`";
        $resultat3 = mysqli_query($conn,$sql);
        return $resultat3;
    }
}