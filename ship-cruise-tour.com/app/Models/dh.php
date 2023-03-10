<?php

class dh {
    function dh($page){
        if($page=="cruises"){
            $sql="SELECT c.`id-cruise`, s.name, c.price , c.img, c.`num-of-nights`, p.port, c.`cruise-itinerary`, c.`date-of-departure` FROM cruises c , ship s ,port p where c.ship=s.id and c.`port-of-departure`=p.id;";
        }elseif($page=="ship"){
            $sql="SELECT * FROM `ship`";
        }else{
            $sql="SELECT * FROM `port`";
        }
        $test = new connection;
        $conn = $test->connection();
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function stc(){
        $test = new connection;
        $conn = $test->connection();
        $sql = "SELECT COUNT(*) FROM `cruises`";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function stc1(){
        $test = new connection;
        $conn = $test->connection();
        $sql = "SELECT COUNT(*) FROM `ship`";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function stc2(){
        $test = new connection;
        $conn = $test->connection();
        $sql = "SELECT COUNT(*) FROM `port`";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function stc3(){
        $test = new connection;
        $conn = $test->connection();
        $sql = "SELECT COUNT(*) FROM `reservation`";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function stc4(){
        $test = new connection;
        $conn = $test->connection();
        $date0 = date("Y-m")."-01";
        $date1 = date("Y-m")."-31";
        $sql = "SELECT COUNT(*) FROM `cruises` WHERE `date-of-departure` between '$date0' and '$date1'";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function stc5(){
        $test = new connection;
        $conn = $test->connection();
        $sql = "SELECT COUNT(*) FROM `clients` WHERE `role` = 'client'";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function stc6($id){
        $test = new connection;
        $conn = $test->connection();
        $sql = "SELECT * FROM `ship` WHERE id =$id";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function dhR(){
        $sql="SELECT r.`id`, u.firstName, r.cruise , r.`reservation-date`, r.`reservation-price` , c.label FROM clients u , reservation r , category c where r.costumer = u.id and r.room = c.id ;";
        $test = new connection;
        $conn = $test->connection();
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function aff($cat){
        $test = new connection;
        $conn = $test->connection();
        $ret = mysqli_query($conn, "SELECT * FROM `category` WHERE `id`= $cat");
        return $ret;
    }
    function search($name){
        $nam = str_replace("2023-", "", $name);
        $test = new connection;
        $conn = $test->connection();
        $sql = "SELECT c.`id-cruise`, s.name,s.`num-of-rooms`, s.`num-of-places`, c.price , c.img, c.`num-of-nights`, p.port, c.`cruise-itinerary`, c.`date-of-departure` FROM cruises c , ship s ,port p where c.ship=s.id and c.`port-of-departure`=p.id and MONTH(c.`date-of-departure`) = '$nam';";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function searchReservations($name,$id){
        $test = new connection;
        $conn = $test->connection();
        $sql = "SELECT r.`id`, u.firstName, r.cruise , r.`reservation-date`, r.`reservation-price` , c.label , i.`date-of-departure`  FROM clients u , reservation r , category c , cruises i where r.costumer = u.id and r.room = c.id and r.costumer = $id and i.`id-cruise` = r.cruise and c.label like '%".$name."%';";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function searchS($name){
        $test = new connection;
        $conn = $test->connection();
        $sql1 = "SELECT c.`id-cruise`, s.name, s.`num-of-rooms`, s.`num-of-places`, c.price , c.img, c.`num-of-nights`, p.port, c.`cruise-itinerary`, c.`date-of-departure` FROM cruises c , ship s ,port p where c.ship=s.id and c.`port-of-departure`=p.id and c.`ship`=$name;";
        $resultat1 = mysqli_query($conn,$sql1);
        return $resultat1;
    }
    function searchP($name){
        $test = new connection;
        $conn = $test->connection();
        $sql1 = "SELECT c.`id-cruise`, s.name, s.`num-of-rooms`, s.`num-of-places`, c.price , c.img, c.`num-of-nights`, p.port, c.`cruise-itinerary`, c.`date-of-departure` FROM cruises c , ship s ,port p where c.ship=s.id and c.`port-of-departure`=p.id and c.`port-of-departure`=$name;";
        $resultat1 = mysqli_query($conn,$sql1);
        return $resultat1;
    }
    function searchR($name){
        $test = new connection;
        $conn = $test->connection();
        $sql = "SELECT * from clients WHERE firstName LIKE '%".$name."%'";
        $resultat = mysqli_query($conn,$sql);
        $id=0;
        if($resultat){
            foreach ($resultat->fetch_all(MYSQLI_ASSOC) as $row) {
                $id = $row['id'];
            }
        }
        $sql1 = "SELECT r.`id`, u.firstName, r.cruise , r.`reservation-date`, r.`reservation-price` , c.label , i.`date-of-departure` FROM clients u , reservation r , category c , cruises i where r.costumer = u.id and r.room = c.id and costumer = $id and i.`id-cruise` = r.cruise;";
        $resultat1 = mysqli_query($conn,$sql1);
        return $resultat1;
    }
}