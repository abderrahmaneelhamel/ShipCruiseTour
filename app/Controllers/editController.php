<?php

class editController {
  function editController($ID){
    if (isset($_POST['submit'])) {
        $ship = isset($_POST["ship"]) ? $_POST["ship"] : null;
        $price = isset($_POST["price"]) ? $_POST["price"] : null;
        $numOfNights = isset($_POST["num-of-nights"]) ? $_POST["num-of-nights"] : null;
        $portOfDeparture = isset($_POST["port-of-departure"]) ? $_POST["port-of-departure"] : null;
        $cruiseItinerary = isset($_POST["cruise-itinerary"]) ? $_POST["cruise-itinerary"] : null;
        $dateOfDeparture = isset($_POST["date-of-departure"]) ? $_POST["date-of-departure"] : null;
        if (!empty($_FILES["image"]["name"])) {
          
            $target_dir = "../app/View/uploads/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            
                // Check if image file is a actual image or fake image
                if (isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["image"]["tmp_name"]);
                    if ($check !== false) {
                        // echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                }
            
                if (
                    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif"
                ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
            
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                    echo "<a href='dachBoard'>return to dachBoard</a>";
                } else {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {                    
                        $image = "uploads/" . $_FILES["image"]["name"];
                        $update = new edit;
                        $resultat=$update->edit($ship,$price,$image,$numOfNights,$portOfDeparture,$cruiseItinerary,$dateOfDeparture,$ID);
                        if ($resultat) {
                          header("Location:dachBoard");
                        }
                    } else {
                        echo "<span style:'color: black;'>Sorry, there was an error uploading your file.</span><br>";
                        echo "<a href='dachBoard'>return to dachBoard</a>";
                    }
                  }
        }else{
          $image ="";
          $update = new edit;
          $resultat=$update->edit($ship,$price,$image,$numOfNights,$portOfDeparture,$cruiseItinerary,$dateOfDeparture,$ID);
          if ($resultat) {
            header("Location:dachBoard");
          }
        }
      }
  }
  function editRController($ID){
    if (isset($_POST['submit'])) {
        $price = isset($_POST["price"]) ? $_POST["price"] : null;
        $cruise = isset($_POST["cruise"]) ? $_POST["cruise"] : null;
        $dateOfReservation = isset($_POST["dateOfReservation"]) ? $_POST["dateOfReservation"] : null;
        $edit = new edit;
        $resultat=$edit->editR($cruise,$price,$dateOfReservation,$ID);
        if ($resultat) {
          header("Location:reservation");
        }
    }
}

}

?>