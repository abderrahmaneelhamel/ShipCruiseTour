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
        $sql="DELETE FROM `reservation` WHERE `id`=$ID";
        $resultat = mysqli_query($conn,$sql);
        if ($resultat) {
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
