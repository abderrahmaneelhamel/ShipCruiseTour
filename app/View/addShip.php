<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>shipcruise tour</title>
    <link rel="stylesheet" href="../app/View/assets/css/bootstrap.css">
    <link rel="stylesheet" href="../app/View/assets/css/style2.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="../app/View/assets/js/bootstrap.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color:white ;">
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="log2" style="color:rgb(10 82 189);">ADD NEW SHIP</h3>
        </div>
        <div class="container d-flex justify-content-center">
        <form method="post" style="width:50vw; min-width:300px ;" enctype="multipart/form-data">
                <div class="row">
                    <div class="row">
                        <label style="color:rgb(10 82 189);" class="log">name</label>
                        <input type="text" class="form-control" name="name" placeholder="name" required>
                    </div>
                    <div class="row">
                        <label class="log" style="color:rgb(10 82 189);">number of rooms</label>
                        <input type="number" class="form-control" name="num-of-rooms" placeholder="number of rooms" required>
                    </div>
                    <div class="row">
                        <label class="log" style="color:rgb(10 82 189);">number of places</label>
                        <input type="number" class="form-control" name="num-of-places" placeholder="number of places" required>
                    </div>
                </div>
                <div class="col ret">
                    <div class="sub">
                        <input  type="submit" class="btn btn-outline-primary mb-4" name="submit" value="Add">
                        <a href="ship" class="btn btn-outline-dark mb-4">Cancel</a>
                    </div>
                </div>    
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>