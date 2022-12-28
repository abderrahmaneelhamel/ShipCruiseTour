<?php 

class cruise
{
    function list(){
        $test = new connection;
        $conn = $test->connection();
        $sql="SELECT c.`id-cruise`, c.ship , s.name, s.`num-of-rooms`, s.`num-of-places`, c.price , c.img, c.`num-of-nights`, p.port, c.`cruise-itinerary`, c.`date-of-departure` FROM cruises c , ship s ,port p where c.ship=s.id and c.`port-of-departure`=p.id;";
        $resultat = mysqli_query($conn,$sql);
        return $resultat;
    }

}