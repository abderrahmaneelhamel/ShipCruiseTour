<?php

    require("../../autoloader.php");

class buy {
    function buy() {
        $id = $_POST["id"];
        $test = new connection;
        $conn = $test->connection();
        $sql = "SELECT * FROM products as p WHERE p.`id-product` = $id ;"; 

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            $qtty = $result->fetch_assoc()["quantity"];
            $qtty--;
            if ( $qtty >= 0 ) {
                $sql2 = "UPDATE reservation SET quantity = $qtty where products.`id-product` = $id;";
                $result2 = $conn->query($sql2);
                echo "done";
            }else{
                echo "not enough qtyy";
            }
        }
        else{
            echo "error, not found";
        }
        $conn->close();
        exit();
    }
}
$start = new buy;
$start->buy();