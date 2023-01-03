<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../app/View/assets/images/shipCruiseTour.png" type="image/x-icon">
    <title>Ship cruise tour</title>
    <link rel="stylesheet" href="../app/View/assets/css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="../app/View/assets/css/style2.css" rel="stylesheet" />
    <link
    rel="stylesheet"
    href="../app/View/assets/contrast-bootstrap-pro/css/bootstrap.min.css" />
  <link
    rel="stylesheet"
    href="../app/View/assets/contrast-bootstrap-pro/css/cdb.css" />
    <link rel="stylesheet" href="../app/View/assets/css/style.css">
  <script
    src="../app/View/assets/contrast-bootstrap-pro/js/cdb.js"></script>
  <script
    src="../app/View/assets/contrast-bootstrap-pro/js/bootstrap.min.js"></script>
  <script
    src="https://kit.fontawesome.com/9d1d9a82d2.js"
    crossorigin="anonymous"></script>
    <script src="../app/View/assets/js/bootstrap.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav style="background-color:black; display:flex; justify-content:space-between; width:100%;" class="res navbar navbar-expand-lg bg-dark">
<div class="container-fluid">
    <a style="color: white;" class="navbar-brand" href="home">Ship Cruise Tour</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="color: white;" class="nav-link active" aria-current="page" href="dachBoard">Home</a>
        </li>
        <li class="nav-item">
          <a style="color: white;" class="nav-link" href="cruises">management</a>
        </li>
        <li class="nav-item">
          <a class="disconnected btn btn-primary" style="width:120px;" href="disconnect" >disconnect</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="d-flex flex-wrap">
<div style="width: 580px;" class="d-flex flex-wrap justify-content-start m-4">
<label class="log" style="color:rgb(10 82 189); width: 27rem; "><h1>DachBoard</h1></label>
<label class="log" style="color:rgb(10 82 189); width: 27rem;"><h3>1.General Stastics :</h3></label>
<?php
  $row1 = mysqli_fetch_assoc($resultat1);
?>
<div class="card border-primary m-2" style="width: 17rem;">
  <div class="card-header bg-transparent border-primary">cruises</div>
  <div class="card-body text-primary">
    <h5 class="card-title">Total of the cruises:</h5>
    <h1 class="card-text"><?php echo $row1['COUNT(*)']?></h1>
  </div>
</div>
<?php
  $row2 = mysqli_fetch_assoc($resultat2);
?>
<div class="card border-success m-2" style="width: 17rem;">
  <div class="card-header bg-transparent border-success">ships</div>
  <div class="card-body text-success">
    <h5 class="card-title">Total of the ships:</h5>
    <h1 class="card-text"><?php echo $row2['COUNT(*)']?></h1>
  </div>
</div>
<?php
  $row3 = mysqli_fetch_assoc($resultat3);
?>
<div class="card border-danger m-2" style="width: 17rem;">
  <div class="card-header bg-transparent border-danger">port</div>
  <div class="card-body text-danger">
    <h5 class="card-title">Total of the port:</h5>
    <h1 class="card-text"><?php echo $row3['COUNT(*)']?></h1>
  </div>
</div>
<?php
  $row4 = mysqli_fetch_assoc($resultat4);
?>
<div class="card border-warning m-2" style="width: 17rem;">
  <div class="card-header bg-transparent border-warning">reservations</div>
  <div class="card-body text-warning">
    <h5 class="card-title">Total of the reservations:</h5>
    <h1 class="card-text"><?php echo $row4['COUNT(*)']?></h1>
  </div>
</div>
<?php
  $row5 = mysqli_fetch_assoc($resultat5);
?>
<div class="card border-dark m-2" style="width: 17rem;">
  <div class="card-header bg-transparent border-dark">cruises</div>
  <div class="card-body text-dark">
    <h5 class="card-title">Total of the cruises for this month:</h5>
    <h1 class="card-text"><?php echo $row5['COUNT(*)']?></h1>
  </div>
</div>
<?php
  $row6 = mysqli_fetch_assoc($resultat6);
?>
<div class="card border-secondary m-2" style="width: 17rem;">
  <div class="card-header bg-transparent border-secondary">clients</div>
  <div class="card-body text-secondary">
    <h5 class="card-title">Total of the clients:</h5>
    <h1 class="card-text"><?php echo $row6['COUNT(*)']?></h1>
  </div>
</div>
</div>
<div style="width: 50%;">
<div style="width: 50%;">
  <form  method="post" class="pt-5">
  <label class="log pt-5" style="color:rgb(10 82 189);"><h3>2.Cruises Stastics :</h3></label>
  <div class="d-flex" style="width: 410px;">
    <select class="form-control m-2" name="cruise" id="cruise" onChange="getSubCat(this.value);">
        <option value="">Select cruise </option>
        <?php
        foreach ($resultat8->fetch_all(MYSQLI_ASSOC) as $row8) {
        ?>
            <option value="<?php echo $row8['ship']; ?>"> <?php echo $row8['id-cruise']; ?></option>
        <?php } ?>
    </select>
    <input  type="submit" class="btn btn-outline-primary m-2" name="submit" value="choose">
    </div>
  </form>
</div>
<?php    $row7 = mysqli_fetch_assoc($resultat7); ?>
  <div style="width: 100%; height: 50%; margin: auto;">
    <canvas id="chart"></canvas>
  </div>  
</div> 
</div>
<footer>
        <div class="container">
          <div style="width: 100%; display:flex; justify-content:center;"><img style="width: 150px;" src="../app/View/assets/images/shipCruiseTour.png" alt="logo"></div>
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                        <p>Copyright &copy; 2020 SHIP CRUISE TOUR 
                        
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><p>Follow Us</p></li>
                                <li><a rel="nofollow" href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a rel="nofollow" href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a rel="nofollow" href=""><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script>
      const ctx = document.getElementById("chart").getContext('2d');
      const myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ["booked", "empty"],
          datasets: [{
            label: 'food Items',
            data: [<?php echo $row7['num-of-places']?>, (<?php echo $row7['num-of-rooms']?>-<?php echo $row7['num-of-places']?>)],
            backgroundColor: ["#0074D9", "#FF4136", "#2ECC40",
            "#FF851B", "#7FDBFF", "#B10DC9", "#FFDC00",
            "#001f3f", "#39CCCC", "#01FF70", "#85144b",
            "#F012BE", "#3D9970", "#111111", "#AAAAAA"]
          }]
        },
      });
</script>
</body>


</html>