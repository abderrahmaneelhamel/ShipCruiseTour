<?php

class signup {
    function signup($fullname,$name,$email,$password){
        $role = "client";
        $test = new connection;
        $conn = $test->connection();
        
           if($conn->connect_error){
           die('conection failed :'.$conn->connect_error);
           echo "error";
           }else{
           mysqli_query($conn,"INSERT INTO `clients` (`fullName`,`firstName`,`email`, `password`,`role`) VALUES ('$fullname','$name','$email','$password','$role')");
           header("Location: login");
           }
    }
    
}