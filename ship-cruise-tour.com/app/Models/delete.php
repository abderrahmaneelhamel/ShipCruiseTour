<?php

class delete {
    function delete($ID){
        $test = new connection;
        $conn = $test->connection();
        $sql="DELETE FROM `cruises` WHERE `id-cruise`=$ID";
        $resultat = mysqli_query($conn,$sql);
        if ($resultat) {
            header("Location:dachBoard");
        }
    }
    function deleteR($ID){
        $test = new connection;
        $conn = $test->connection();
        $sql="DELETE FROM `reservation` WHERE `id`=$ID";
        $resultat = mysqli_query($conn,$sql);
        if ($resultat) {
            header("Location:reservation");
        }
    }
    function deleteB($ID){
        $test = new connection;
        $conn = $test->connection();
        $sql0 = "SELECT * from `reservation` WHERE `id` = $ID;";
        $resultat0 = mysqli_query($conn,$sql0);
        $row = mysqli_fetch_assoc($resultat0);
        $ID1 = $row['cruise'];
        $room = $row['room'];
        switch($room){
            case 1 :
                $capacity = 1;
                break;

            case 2 :
                $capacity = 2;
                break;
                
            case 3 :
                $capacity = 6;
                break;

            case 4 :
                $capacity = 2;
                break;

            default :
                $capacity =1;
                break; 
        }
        $sql2 = "SELECT * from `cruises` WHERE `id-cruise` = $ID1;";
        $resultat2 = mysqli_query($conn,$sql2);
        $row1= mysqli_fetch_assoc($resultat2);
        $id = $row1['ship'];
        $sql1 = "UPDATE `ship` SET `num-of-places` = `num-of-places`-$capacity WHERE id = $id;";
        $resultat1 = mysqli_query($conn,$sql1);
        $sql="DELETE FROM `reservation` WHERE `id`=$ID";
        $resultat = mysqli_query($conn,$sql);
        if (($resultat1)&&($resultat)) {
            header("Location:reservations");
        }
    }
    function deleteS($ID){
        $test = new connection;
        $conn = $test->connection();
        $sql="DELETE FROM `ship` WHERE `id`=$ID";
        $resultat = mysqli_query($conn,$sql);
        if ($resultat) {
            header("Location:ship");
        }
    }
    function deleteP($ID){
        $test = new connection;
        $conn = $test->connection();
        $sql="DELETE FROM `port` WHERE `id`= $ID";
        $resultat = mysqli_query($conn,$sql);
        if ($resultat) {
            header("Location:port");
        }
    }
}
