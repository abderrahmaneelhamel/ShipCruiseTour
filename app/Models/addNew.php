<?php

class addNew {
    function addNew($ship,$price,$image,$numOfNights,$portOfDeparture,$cruiseItinerary,$dateOfDeparture){
        
        $test = new connection;
        $conn = $test->connection();
        $sql = "INSERT INTO `cruises` (`ship`, `price`, `img`, `num-of-nights`, `port-of-departure`, `cruise-itinerary`, `date-of-departure`) VALUES ('$ship','$price','$image','$numOfNights','$portOfDeparture','$cruiseItinerary','$dateOfDeparture')";
        $resultat = $conn->prepare($sql);
        $resultat->execute() or die("Erreur lors de l'execution de la requete: ");
        if($resultat){
            header("Location:cruises");
        }

    }
    function book($costumer,$cruise,$price,$dateOfReservation,$room){

        $test = new connection;
        $conn = $test->connection();
        $sql = "INSERT INTO `reservation` (`costumer`, `cruise`, `reservation-date`, `reservation-price` , `room`) VALUES ('$costumer','$cruise','$dateOfReservation','$price','$room')";
        $resultat = mysqli_query($conn,$sql);
    }
    function room($ship,$price,$room,$capacity){

        $test = new connection;
        $conn = $test->connection();
        $sql = "INSERT INTO `rooms` (`ship`, `room-type`, `price`, `capacity`) VALUES ('$ship','$room','$price','$capacity')";
        $resultat = mysqli_query($conn,$sql);
        if($resultat){
            header("Location:home#cruises");
        }
    }
    function updateplace($id,$capacity){
        $test = new connection;
        $conn = $test->connection();
        $sql = "SELECT * from `ship` WHERE id = $id;";
        $resultat = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($resultat);
        $places=$row['num-of-places'];
        $rooms = $row['num-of-rooms'];
        if(($places+$capacity) <= $rooms){
            $sql1 = "UPDATE `ship` SET `num-of-places` = `num-of-places`+$capacity WHERE id = $id;";
            $resultat1 = mysqli_query($conn,$sql1);
            return $resultat1;
        }else{
            return false;
        }
    }
    function addNewS($name,$numOfRooms,$numOfPlaces){

        $test = new connection;
        $conn = $test->connection();
        $sql = "INSERT INTO `ship`(`name`, `num-of-rooms`, `num-of-places`) VALUES ('$name','$numOfRooms','$numOfPlaces')";
        $resultat = mysqli_query($conn,$sql);
        if($resultat){
            header("Location:ship");
        }
    }


    function addNewP($name,$country){

        $test = new connection;
        $conn = $test->connection();
        $sql = "INSERT INTO `port`(`port`, `country`) VALUES ('$name','$country')";
        $resultat = mysqli_query($conn,$sql);
        if($resultat){
            header("Location:port");
        }
    }
}