<?php
class test {
    function tset(){
        $con = mysqli_connect("localhost", "root", "" , "ship cruise tour");
        $response = array();
        if ($con) {
        $sql = "SELECT r.`id`, u.firstName, r.cruise , r.`reservation-date`, r.`reservation-price` , c.label , i.`date-of-departure` FROM clients u , reservation r , category c , cruises i where r.costumer = u.id and r.room = c.id and i.`id-cruise` = r.cruise;";
        $result = mysqli_query($con, $sql);
        if($result) {
        $x = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $response [$x]['id'] = $row['id'];
            $response [$x]['costumer'] = $row['firstName'];
            $response [$x]['cruise'] = $row['cruise'];
            $response [$x]['reservationPrice'] = $row['reservation-price'];
            $response [$x]['reservationDate'] = $row['reservation-date'];
            $response [$x]['roomType'] = $row['label'];
            $x++;
        }
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
        }else {
            echo "Database connection failed";
        }
    }
}
$tset = new test;
$tset->tset();
?>