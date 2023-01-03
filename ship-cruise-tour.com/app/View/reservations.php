<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../app/View/assets/images/shipCruiseTour.png" type="image/x-icon">
    <title>Ship cruise tour</title>
    <link rel="stylesheet" href="../app/View/css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="../app/View/assets/css/style2.css" rel="stylesheet" />
    <script src="../app/View/assets/js/bootstrap.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a style="color: white;" class="navbar-brand" href="home">Ship Cruise Tour</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="color: white;" class="nav-link active" aria-current="page" href="reservations">My reservations</a>
        </li>
        <li class="nav-item">
          <a style="color: white;" class="nav-link" href="home">home</a>
        </li>
      </ul>
      <form method="POST" class="d-flex" role="search">
        <input class="form-control me-2" type="text" name="room" placeholder="Search by room type" aria-label="Search">
        <input class="btn btn-outline-success" name="search" type="submit" value="Search">
      </form>
    </div>
  </div>
</nav>
<div style="width: 100% !important; overflow-x: scroll;">
<table class="table table-light table-striped table-hover text-center">
  <thead class="table-light">
    <tr>
      <th scope="col">Action</th>
      <th scope="col">COSTUMER</th>
      <th scope="col">CRUISE</th>
      <th scope="col">RESERVATION PRICE</th>
      <th scope="col">RESERVATION DATE</th>
      <th scope="col">ROOM TYPE</th>
      <th scope="col">DOWNLOAD TECKET</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    while($row = mysqli_fetch_assoc($resultat)){

?>
<tr><td>      
        <a href="bd?id=<?php echo $row['id'] ?>" class="link-primary"><i class="fa-solid fa-trash fs-6 me-3"></i></a>
      </td>
      <td><?php echo $row['firstName'] ?></td>
      <td><?php echo $row['cruise'] ?></td>
      <td><?php echo $row['reservation-price'] ?></td>
      <td><?php echo $row['reservation-date'] ?></td>
      <td><?php echo $row['label'] ?></td>
      <td>
        <?php
         $myfile = fopen("../app/View/uploads/ticket".$row['id'].".txt", "w") or die("Unable to open file!");
         $txt = "************************ YOUR TICKET ****************************\n";
         fwrite($myfile, $txt);
         $txt = "*name : ".$row['firstName']."\n";
         fwrite($myfile, $txt);
         $txt = "*cruise : ".$row['cruise']."\n";
         fwrite($myfile, $txt);
         $txt = "*price : ".$row['reservation-price']."\n";
         fwrite($myfile, $txt);
         $txt = "*reservation date : ".$row['reservation-date']."\n";
         fwrite($myfile, $txt);
         $txt = "*room type : ".$row['label']."\n";
         fwrite($myfile, $txt);
         $txt = "*****************************************************************\n";
         fwrite($myfile, $txt);
         fclose($myfile);
        ?>
        <a href='../app/View/uploads/ticket<?php echo $row["id"]?>.txt' download="ticket"><button class="btn btn-outline-success m-1">Download</button></a>
      </td>
    </tr>
<?php
   }
?>
    
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2
.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>