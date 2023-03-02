<?php
class addNewController {
    function addNewController(){
        
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
                    $add = new addNew;
                    $cruise = $add->addNew($ship,$price,$image,$numOfNights,$portOfDeparture,$cruiseItinerary,$dateOfDeparture);
                    $add->addItinerary($itinerary,$cruise);
                    header("Location:cruises");
                } else {
                    echo "<span style:'color: black;'>Sorry, there was an error uploading your file.</span><br>";
                    echo "<a href='cruises'>return to cruises</a>";
                }
            }
        }
    }
    function addSController(){
        if (isset($_POST['submit'])) {
            $name = isset($_POST["name"]) ? $_POST["name"] : null;
            $numOfRooms = isset($_POST["num-of-rooms"]) ? $_POST["num-of-rooms"] : null;
            $numOfPlaces = isset($_POST["num-of-places"]) ? $_POST["num-of-places"] : null;
    
            $add = new addNew;
            $add->addNewS($name,$numOfRooms,$numOfPlaces);
        }
    }
    function addPController(){
        if (isset($_POST['submit'])) {
            $name = isset($_POST["name"]) ? $_POST["name"] : null;
            $country = isset($_POST["country"]) ? $_POST["country"] : null;
    
            $add = new addNew;
            $add->addNewP($name,$country);
        }
    }
    
}

?>