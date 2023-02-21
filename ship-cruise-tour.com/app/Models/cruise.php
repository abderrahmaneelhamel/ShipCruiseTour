<?php 

class cruise
{
    function list(){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT c.`id-cruise`, c.ship , s.name, s.`num-of-rooms`, s.`num-of-places`, c.price , c.img, c.`num-of-nights`,c.`cruise-itinerary`, p.port, c.`date-of-departure` FROM cruises c , ship s ,port p where c.ship=s.id and c.`port-of-departure`=p.id ORDER BY c.`date-of-departure` DESC;";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }
    function list1($id){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT p.id, p.port , p.country from itinarary i , port p where i.cruise = $id and i.port = p.id;";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }

}