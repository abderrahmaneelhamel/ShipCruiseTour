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
<nav style="background-color:black; display:flex; justify-content:space-between; padding-left:15%;" class="res navbar navbar-expand-lg bg-dark">
      <a style="color: white;" class="nav-link active" aria-current="page" href="dachBoard">Home</a>      
      <form style="width: 65%;" class="d-flex" role="search" method="POST">
        <input class="form-control me-3" name="search" type="search" placeholder="Search by costumer name" aria-label="Search">
        <button style=" border-radius: 7px; border: 1px solid #fff;" class="btn btn-outline-light" type="submit">Search</button>
      </form>
      <a class="btn btn-primary" style="margin:5px; margin-right:30px; width:120px;" href="disconnect" class="disconnect">disconnect</a>
</nav>
<div style="margin-top: 20px; margin-bottom: 20px;">
<ul class="nav nav-tabs">
  <li class="nav-item lii">
    <a class="nav-link" aria-current="page" href="cruises">cruises</a>
  </li>
  <li class="nav-item lii">
    <a class="nav-link" href="ship">ship</a>
  </li>
  <li class="nav-item lii">
    <a class="nav-link" href="port">port</a>
  </li>
  <li class="nav-item lii">
    <a class="nav-link active" href="reservation">reservations</a>
  </li>
</ul>
</div>
<div>
<br>    
</div>
<table class="table table-light table-striped table-hover text-center">
  <thead class="table-light">
    <tr>
      <th scope="col">Action</th>
      <th scope="col">ID</th>
      <th scope="col">COSTUMER</th>
      <th scope="col">CRUISE</th>
      <th scope="col">RESERVATION PRICE</th>
      <th scope="col">RESERVATION DATE</th>
      <th scope="col">ROOM TYPE</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    while($row = mysqli_fetch_assoc($resultat)){

?>
<tr><td>
        <a href="Re?id=<?php echo $row['id'] ?>" class="link-primary"><i class="fa-solid fa-pen-to-square fs-6 me-3"></i></a>
      
        <a href="Rd?id=<?php echo $row['id'] ?>" class="link-primary"><i class="fa-solid fa-trash fs-6 me-3"></i></a>
      </td>
      
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['firstName'] ?></td>
      <td><?php echo $row['cruise'] ?></td>
      <td><?php echo $row['reservation-price'] ?></td>
      <td><?php echo $row['reservation-date'] ?></td>
      <td><?php echo $row['label'] ?></td>
    </tr>
<?php
   }
?>
    
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2
.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>