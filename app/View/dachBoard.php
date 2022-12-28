<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Ship cruise tour</title>
    <link rel="stylesheet" href="../app/View/assets/css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="../app/View/assets/css/style2.css" rel="stylesheet" />
    <script src="../app/View/assets/js/bootstrap.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav style="background-color:black; display:flex; justify-content:space-between; padding-left:5%;" class="res navbar navbar-expand-lg bg-dark">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="color: white;" class="nav-link active" aria-current="page" href="dachBoard">Home</a>
        </li>
        <li class="nav-item">
          <a style="color: white;" class="nav-link" href="cruises">management</a>
        </li>   
</ul>
<a class="btn btn-primary" style="margin:5px; margin-right:30px; width:120px;" href="disconnect" class="disconnect">disconnect</a>
</nav>
<div class="d-flex flex-wrap justify-content-evenly m-4">
<?php
  $row1 = mysqli_fetch_assoc($resultat1);
?>
<div class="card border-primary mb-3" style="max-width: 18rem;">
  <div class="card-header bg-transparent border-primary">cruises</div>
  <div class="card-body text-primary">
    <h5 class="card-title">Total of the cruises:</h5>
    <h1 class="card-text"><?php echo $row1['COUNT(*)']?></h1>
  </div>
</div>
<?php
  $row2 = mysqli_fetch_assoc($resultat2);
?>
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header bg-transparent border-success">ships</div>
  <div class="card-body text-success">
    <h5 class="card-title">Total of the ships:</h5>
    <h1 class="card-text"><?php echo $row2['COUNT(*)']?></h1>
  </div>
</div>
<?php
  $row3 = mysqli_fetch_assoc($resultat3);
?>
<div class="card border-danger mb-3" style="max-width: 18rem;">
  <div class="card-header bg-transparent border-danger">port</div>
  <div class="card-body text-danger">
    <h5 class="card-title">Total of the port:</h5>
    <h1 class="card-text"><?php echo $row3['COUNT(*)']?></h1>
  </div>
</div>
<?php
  $row4 = mysqli_fetch_assoc($resultat4);
?>
<div class="card border-warning mb-3" style="max-width: 18rem;">
  <div class="card-header bg-transparent border-warning">reservations</div>
  <div class="card-body text-warning">
    <h5 class="card-title">Total of the reservations:</h5>
    <h1 class="card-text"><?php echo $row4['COUNT(*)']?></h1>
  </div>
</div>
<?php
  $row5 = mysqli_fetch_assoc($resultat5);
?>
<div class="card border-warning mb-3" style="max-width: 18rem;">
  <div class="card-header bg-transparent border-warning">cruises</div>
  <div class="card-body text-warning">
    <h5 class="card-title">Total of the cruises for this month:</h5>
    <h1 class="card-text"><?php echo $row5['COUNT(*)']?></h1>
  </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2
.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>