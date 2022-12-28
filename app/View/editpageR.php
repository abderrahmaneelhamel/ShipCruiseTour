<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Luxury Gems</title>
    <!-- CSS only -->

    <link rel="stylesheet" href="../app/View/assets/css/bootstrap.css">
    <link rel="stylesheet" href="../app/View/assets/css/style2.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <script src="../app/View/assets/js/bootstrap.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav>
        <div>
            <ul>
                <li><a href="#" style="color:rgb(10 82 189);text-decoration: none;">EDIT PAGE</a></li>
            </ul>

        </div>
            </nav>
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="log2" style="color:rgb(10 82 189);">Edit Cruise</h3>
        </div>
        <?php
         $row = mysqli_fetch_assoc($resultat);
        ?>
        <div class="container d-flex justify-content-center">
            <form method="post" style="width:50vw; min-width:300px ;" enctype="multipart/form-data">
            <div class="row">
                    <div class="row" style="display:none">
                        <label class="log" style="color:rgb(10 82 189);">cruise</label>
                        <select class="form-control" name="cruise" id="cruise" onChange="getSubCat(this.value);">
                            <option value="">Select cruise </option>
                            <?php
                            foreach ($resultat2->fetch_all(MYSQLI_ASSOC) as $row2) {
                            ?>
                                <option value="<?php echo $row2['id-cruise']; ?>"> <?php echo $row2['id-cruise']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="row" style="display:none">
                        <label class="log" style="color:rgb(10 82 189);">reservation Price</label>
                        <input type="text" class="form-control" name="price" placeholder="reservation Price" value="<?php echo $row2['price'] ?>">
                    </div>
                    <div class="row">
                        <label class="log" style="color:rgb(10 82 189);">date of reservation</label>
                        <input type="date" class="form-control" name="dateOfReservation" value="<?php echo $row['reservation-date'] ?>">
                    </div>
                    <div class="row">
                        <label class="log" style="color:rgb(10 82 189);">costumer</label>
                        <select class="form-control" name="room" id="room" onChange="getSubCat(this.value);" required="">
                            <option value="">Select room type </option>
                            <?php
                            foreach ($resultat3->fetch_all(MYSQLI_ASSOC) as $row3) {
                            ?>
                                <option value="<?php echo $row3['id']; ?>"> <?php echo $row3['label']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col ret">
                    <div class="sub">
                        <input  type="submit" class="btn btn-outline-primary mb-4" name="submit" value="update">
                        <a href="reservation" class="btn btn-outline-dark mb-4">Cancel</a>
                    </div>
                </div>     
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2
.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>