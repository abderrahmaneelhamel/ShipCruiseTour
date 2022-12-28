<?php

class addNew {
    function addNew($ship,$price,$image,$numOfNights,$portOfDeparture,$cruiseItinerary,$dateOfDeparture){
        
        $test = new connection;
        $conn = $test->connection();
        $sql = "INSERT INTO `cruises` (`ship`, `price`, `img`, `num-of-nights`, `port-of-departure`, `cruise-itinerary`, `date-of-departure`) VALUES ('$ship','$price','$image','$numOfNights','$portOfDeparture','$cruiseItinerary','$dateOfDeparture')";
        $resultat = $conn->prepare($sql);
        $resultat->execute() or die("Erreur lors de l'execution de la requete: ");
        if($resultat){
            header("Location:dachBoard");
        }

    }
    function addNewR($costumer,$cruise,$price,$dateOfReservation,$room){

        $test = new connection;
        $conn = $test->connection();
        $sql = "INSERT INTO `reservation` (`costumer`, `cruise`, `reservation-date`, `reservation-price` , `room`) VALUES ('$costumer','$cruise','$dateOfReservation','$price','$room')";
        $resultat = mysqli_query($conn,$sql);
        if($resultat){
            header("Location:reservation");
        }
    }
    function book($costumer,$cruise,$price,$dateOfReservation,$room){

        $test = new connection;
        $conn = $test->connection();
        $sql = "INSERT INTO `reservation` (`costumer`, `cruise`, `reservation-date`, `reservation-price` , `room`) VALUES ('$costumer','$cruise','$dateOfReservation','$price','$room')";
        $resultat = mysqli_query($conn,$sql);
        if($resultat){
            header("Location:home#cruises");
        }
    }
    function updateplace($id){
        $test = new connection;
        $conn = $test->connection();
        $sql = "UPDATE `ship` SET `num-of-places` = `num-of-places`+1 WHERE id = $id;";
        $resultat = mysqli_query($conn,$sql);
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
        $sql = "INSERT INTO `port`(`name`, `country`) VALUES ('$name','$country')";
        $resultat = mysqli_query($conn,$sql);
        if($resultat){
            header("Location:port");
        }
    }
}