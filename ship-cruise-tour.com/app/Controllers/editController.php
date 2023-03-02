<?php

class editController {
  function editController($ID){
    if (isset($_POST['submit'])) {
        $ship = isset($_POST["ship"]) ? $_POST["ship"] : null;
        $price = isset($_POST["price"]) ? $_POST["price"] : null;
        $numOfNights = isset($_POST["num-of-nights"]) ? $_POST["num-of-nights"] : null;
        $portOfDeparture = isset($_POST["port-of-departure"]) ? $_POST["port-of-departure"] : null;
        $cruiseItinerary = isset($_POST["cruise-itinerary"]) ? $_POST["cruise-itinerary"] : null;
        $count = 10;
        $itinerary = [];
        for($i=1;$i<=$count;$i++){
            if(isset($_POST["itinerary".$i])){
                array_push($itinerary, $i);
            }
        }
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
                    echo "<a href='cruises'>return to cruises</a>";
                } else {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {                    
                        $image = "uploads/" . $_FILES["image"]["name"];
                        $update = new edit;
                        $cruise=$update->edit($ship,$price,$image,$numOfNights,$portOfDeparture,$cruiseItinerary,$dateOfDeparture,$ID);
                        $update->editItinerary($itinerary,$cruise);
                        header("Location:cruises");
                    } else {
                        echo "<span style:'color: black;'>Sorry, there was an error uploading your file.</span><br>";
                        echo "<a href='cruises'>return to cruises</a>";
                    }
                  }
        }else{
          $image ="";
          $update = new edit;
          $cruise=$update->edit($ship,$price,$image,$numOfNights,$portOfDeparture,$cruiseItinerary,$dateOfDeparture,$ID);
          $update->editItinerary($itinerary,$cruise);
            header("Location:cruises");
        }
      }
  }
  function editRController($ID){
    if (isset($_POST['submit'])) {
        $price = isset($_POST["price"]) ? $_POST["price"] : null;
        $dateOfReservation = isset($_POST["dateOfReservation"]) ? $_POST["dateOfReservation"] : null;
        if(isset($_POST["room"])){
          $room = $_POST["room"];
          switch($room){
              case 1 :
                  $price += 0;
                  break;

              case 2 :
                  $price += 100;
                  break;
                  
              case 3 :
                  $price += 200;
                  break;

              case 4 :
                  $price += 300;
                  break;

              default :
                  $price +=0;
                  break; 
          }
      }else{
          $room = null;
      }
        $edit = new edit;
        $resultat=$edit->editR($price,$dateOfReservation,$room,$ID);
        if ($resultat) {
          header("Location:reservation");
        }
    }
}

}

?>