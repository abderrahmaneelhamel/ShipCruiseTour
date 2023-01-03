<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="shipCruiseTour">
    <meta name="author" content="shipCruiseTour">
    <link rel="shortcut icon" href="../app/View/assets/images/shipCruiseTour.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Ship Cruise Tour</title>
    <link rel="stylesheet" type="text/css" href="../app/View/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../app/View/assets/css/font-awesome.css">
    <link rel="stylesheet" href="../app/View/assets/css/style.css">
    <link rel="stylesheet" href="../app/View/assets/css/responsive.css">
    <link rel="stylesheet" href="../app/View/assets/css/owl-carousel.css">
    <link rel="stylesheet" href="../app/View/assets/css/lightbox.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>
    <header id="navbar_top" class="header-area header-sticky ">
    <div class="container">
            <div class="row">
                <div class="col-12">
        <nav class="navbar navbar-expand-lg bg-body-tertiary main-nav">
                        <div class="container-fluid">
                            <a href="home" class="logo" id="nv">
                                SHIP CRUISE TOUR
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div style="justify-content: flex-end;" class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="nav navbar-nav" id="navv">
                                    <li  class="scroll-to-section nav-item"><a class="nvr dis" href="#top">Home</a></li>
                                    <li  class="scroll-to-section nav-item"><a class="nvr dis" href="#about">About</a></li>
                                    <li  class="scroll-to-section nav-item"><a class="nvr dis" href="#cruises">cruises</a></li>
                                    <li  class="scroll-to-section nav-item"><a class="nvr dis" href="#contact-us">Contact Us</a></li> 
                                    <?php if(isset($_SESSION["user"])){
                                        echo '<li  class="scroll-to-section nav-item"><a class="nvr" href="reservations">My reservations</a></li>';
                                        echo '<li  class="scroll-to-section nav-item"><a style="justify-content: center;" id="nvrb" class="nvr disconnect" href="disconnect">disconnect</a></li>';
                                    }else{
                                        echo '<li  class="scroll-to-section nav-item"><a id="nvrb" class="nvr" href="login">Login</a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="main-banner header-text" id="top">
    <div class="Modern-Slider">
          <div class="item">
            <div class="img-fill">
                <img src="../app/View/assets/images/shipp.jpg" alt="">
                <div class="text-content">
                  <h3>Welcome To Ship Cruise Tour</h3>
                  <h5>The Best Cruises in the world</h5>
                  <a href="#about" class="main-stroked-button">Learn More</a>
                  <a href="#cruises" class="main-filled-button">Get It Now</a>
                </div>
            </div>
          </div>
        </div>
    </div>    
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We offer you the highest levels of comfort</h2>
                        </div>
                        <div class="row">
                            <div data-aos="fade-right" class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="../app/View/assets/images/luxury.png" alt="">
                                    <h4>Comfort</h4>
                                </div>
                            </div>
                            <div data-aos="fade-right" class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="../app/View/assets/images/luxury.png" alt="">
                                    <h4>Luxury</h4>
                                </div>
                            </div>
                            <div data-aos="fade-right" class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="../app/View/assets/images/luxury.png" alt="">
                                    <h4>Safty</h4>
                                </div>
                            </div>
                            <div data-aos="fade-right" class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="../app/View/assets/images/luxury.png" alt="">
                                    <h4>Delicios Food</h4>
                                </div>
                            </div>
                            <div data-aos="fade-right" class="col-md-12">
                                <a href="#" class="main-button-icon">
                                    Learn More <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-text-content">
                        <p><h4>Ship Cruise Tour</h4> 
                        <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus praesentium commodi, eveniet totam doloribus est, laudantium voluptatibus illum harum consequatur voluptatem. Consequatur provident beatae nisi facilis molestiae delectus eum totam! Thank you.
                      <br><br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum officia placeat nihil necessitatibus ipsa harum recusandae molestias quo optio corporis earum ducimus, quas at numquam, iure cupiditate laudantium dolor hic.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="features">
        <div data-aos="fade-up" class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div data-aos="fade-up" class="features-item">
                        <div class="features-icon">
                            <img src="../app/View/assets/images/luxury.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Best Chefs</h4>
                            <p>Proin euismod sem ut diam ultricies, ut faucibus velit ultricies. Nam eu turpis quam. Duis ac condimentum eros.</p>
                            <a href="#" class="text-button-icon">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div data-aos="fade-up" class="features-item">
                        <div class="features-icon">
                            <img src="../app/View/assets/images/luxury.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Luxury suits</h4>
                            <p>Proin euismod sem ut diam ultricies, ut faucibus velit ultricies. Nam eu turpis quam. Duis ac condimentum eros.</p>
                            <a href="#" class="text-button-icon">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div data-aos="fade-up" class="features-item">
                        <div class="features-icon">
                            <img src="../app/View/assets/images/luxury.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Smooth Sealing</h4>
                            <p>Proin euismod sem ut diam ultricies, ut faucibus velit ultricies. Nam eu turpis quam. Duis ac condimentum eros.</p>
                            <a href="#" class="text-button-icon">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="subscribe">
        <div class="container">
            <div class="row">
                <div data-aos="fade-right" class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h6>Subscribe Newsletters</h6>
                        <h2>Don’t miss this chance!</h2>
                    </div>
                    <div class="subscribe-content">
                        <p>Vivamus suscipit blandit nibh, in cursus mi. Proin vel blandit metus, et auctor elit. Vivamus tincidunt tristique convallis. Ut nec odio vel arcu euismod semper nec ac sem.</p>
                        <div class="subscribe-form">
                            <form>
                                <div class="row">
                                    <div class="col-md-8 col-sm-12">
                                      <fieldset>
                                        <input name="email" type="text" id="email" placeholder="Enter your email..." required="">
                                      </fieldset>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                      <fieldset>
                                        <a href="#cruises" class="btn btn-outline-light">Subscribe Now</a>
                                      </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
      <div class="container pt-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="section-heading">
                    <h5 class="m-3">Our Ships</h5>
                    <h2>Some of our best Ships</h2>
                </div>
                <div id="items"></div>
            </div>
            <div class="col-lg-9">
                <div class="filters-content">
                    <div class="row grid">
                        <div data-aos="flip-left" style="width: 270px;" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 m-1 p-0 p-0">
                          <div class="item" >
                            <img style="width: -webkit-fill-available;" src="../app/View/assets/images/ship3.jpg" alt="">
                          </div>
                        </div>
                        <div data-aos="flip-left" style="width: 270px;" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 m-1 p-0">
                          <div class="item" >
                            <img style="width: -webkit-fill-available;" src="../app/View/assets/images/ship4.jpg" alt="">
                          </div>
                        </div>
                        <div data-aos="flip-left" style="width: 270px;" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 m-1 p-0">
                          <div class="item" >
                            <img style="width: -webkit-fill-available;" src="../app/View/assets/images/ship8.jpg" alt="">
                          </div>
                        </div>
                        <div data-aos="flip-left" style="width: 270px;" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 m-1 p-0 p-0">
                          <div class="item" >
                            <img style="width: -webkit-fill-available;" src="../app/View/assets/images/ship4.jpg" alt="">
                          </div>
                        </div>
                        <div data-aos="flip-left" style="width: 270px;" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 m-1 p-0">
                          <div class="item" >
                            <img style="width: -webkit-fill-available;" src="../app/View/assets/images/ship6.jpg" alt="">
                          </div>
                        </div>
                        <div data-aos="flip-left" style="width: 270px;" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 m-1 p-0">
                          <div class="item" >
                            <img style="width: -webkit-fill-available;" src="../app/View/assets/images/ship3.jpg" alt="">
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <?php if(isset($resultat0)){ ?>
    <div id="itinarary" style="position: fixed; z-index: 990;top: 0px; background: transparent;backdrop-filter: blur(10px);width: 100%;height: 100%;display: flex;align-items: center;justify-content: center;">
    <div style="border-radius: 20px; background-color: white;width: 50%;height: 50%;display: flex;align-items: center;justify-content: center;">
        <a href="home"><img style="position: absolute;top: 160px;left: 877px;" onclick="clossse()" src="../app/View/assets/images/close.png"></a>
        <?php 
                $id = 1;
                while($row0 = mysqli_fetch_assoc($resultat0)){
                    ?> <div style="display: flex;flex-direction: column;align-items: center;justify-content: center;margin:10px;">
                        <div style='color: black; margin:5px;'>The port <?php echo $id?>:<?php echo $row0['port']?></div>
                        <div style='color: black; margin:5px;'>The country :<?php echo $row0['country']?></div>
                    </div>
                    <?php 
                $id++;    
            }
            }
            ?>
        </div>
        </div>
    <section class="section" id="testimonials">
        <div class="container" id="cruises">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h6>Best Deals</h6>
                        <h2>Our best Cruises</h2>
                        <div style="width: 100%;" class="d-flex search">
                        <div class="d-flex justify-content-center my-2">
                        <form style="width: 100%;" class="d-flex" role="search" method="POST">
                            <input class="form-control me-3" name="date" placeholder="Search by date" aria-label="Search">
                            <input style="height: 40px;" type="submit" name="search" class="btn btn-outline-light" value="search">
                        </form>
                        </div>
                        <div class="d-flex justify-content-center my-2">
                        <form style="width: 100%;" class="d-flex" role="search" method="POST">
                            <select style="width:78%; margin-top: 3px !important;" class="form-select mb-3 me-3" name="ship">
                                <option value="">Select ship </option>
                                <?php
                                foreach ($resultat1->fetch_all(MYSQLI_ASSOC) as $row1) {
                                ?>
                                    <option value="<?php echo $row1['id']; ?>"> <?php echo $row1['name']; ?></option>
                                <?php } ?>
                            </select>
                            <input style="height: 40px;" type="submit" name="searchS" class="btn btn-outline-light" value="search">
                        </form>
                        </div>
                        <div class="d-flex justify-content-center my-2">
                        <form style="width: 100%;" class="d-flex" role="search" method="POST">
                            <select style="width:78%; margin-top: 3px !important;" class="form-select mb-3 me-3" name="port">
                                <option value="">Select port </option>
                                <?php
                                foreach ($resultat2->fetch_all(MYSQLI_ASSOC) as $row2) {
                                ?>
                                    <option value="<?php echo $row2['id']; ?>"> <?php echo $row2['port']; ?></option>
                                <?php } ?>
                            </select>
                            <input style="height: 40px;" type="submit" name="searchP" class="btn btn-outline-light" value="search">
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="d-flex owl-theme" style="flex-wrap:wrap;">
                    <?php
                    while($row = mysqli_fetch_assoc($resultat)){
                        if(($row['date-of-departure']>= date("Y-m-d")) && isset($_SESSION['user']) && ($row['num-of-places'] < $row['num-of-rooms'])){
                    ?>    
                       <div data-aos="zoom-in" class="item author-item mx-1" style="width: 550px;">
                            <div class="member-thumb">
                                <img style="width: 100%;" src="../app/View/<?php echo $row['img'] ?>" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h3 style="color: white; margin:5px;">Cruise <?php echo $row['id-cruise'] ?></h3>
                                        <div style="color: white; margin:5px;">The cruise itinarary: <?php echo $row['cruise-itinerary']?></div>
                                        <div style="color: white; margin:5px;">Click to visualise the cruise itinarary
                                            <form method="post">
                                                <input style="display: none;" type="text" name="cruise" value="<?php echo $row['id-cruise']?>">
                                                <input type="submit" name="itinarary" value="View">
                                            </form>
                                        </div>
                                        <div style="color: white; margin:5px;">The port of departure: <?php echo $row['port']?></div>
                                        <div style="color: white; margin:5px;">The date of departure: <?php echo $row['date-of-departure']?></div>
                                        <form method="post">
                                        <input style="display: none;" type="text" name="cruise" value="<?php echo $row['id-cruise'] ?>">
                                        <input style="display: none;" type="text" name="price" value="<?php echo $row['price']?>">
                                        <input style="display: none;" type="text" name="place" value="<?php echo $row['ship']?>">
                                        <select style="width: 50%; margin-left:25%;margin-bottom: 1rem !important;" class="form-select my-5" name="room" aria-label="Default select example">
                                            <option value="1" selected>Solo bedroom | <?php echo ($row['price']+0) ?>$</option>
                                            <option value="2">room for two | <?php echo ($row['price']+100) ?>$</option>
                                            <option value="3">Family room | <?php echo ($row['price']+200) ?>$</option>
                                            <option value="4">suite | <?php echo ($row['price']+300) ?>$</option>
                                        </select>
                                            <button type="submit" name="submit" class="btn btn-outline-success">book</button>;
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <h4><?php echo ".".$row['name']?></h4>
                        </div>
                        <?php
                        }elseif(($row['num-of-places'] == $row['num-of-rooms'])){
                            ?>
                            <div data-aos="zoom-in" class="item author-item mx-1" style="width: 550px;">
                            <div class="member-thumb">
                                <img style="width: 100%;" src="../app/View/<?php echo $row['img'] ?>" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h3 style="color: white; margin:5px;">Cruise <?php echo $row['id-cruise'] ?></h3>
                                        <div style="color: white; margin:5px;">The cruise itinarary: <?php echo $row['cruise-itinerary']?></div>
                                        <div style="color: white; margin:5px;">The port of departure: <?php echo $row['port']?></div>
                                        <div style="color: white; margin:5px;">The date of departure: <?php echo $row['date-of-departure']?></div>
                                        <form method="post">
                                        <input style="display: none;" type="text" name="cruise" value="1">
                                        <input style="display: none;" type="text" name="price" value="<?php echo $row['price']?>">
                                        <?php if(isset($_SESSION["user"])){
                                            echo '<input type="submit" name="submit" class="btn disabled btn-outline-danger" value="All Places are full">';
                                        }else{
                                            echo '<a href="login" class="btn btn-outline-success">Login to book</a>';
                                        }?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <h4><?php echo ".".$row['name']?></h4>
                        </div>
                            <?php
                        }else{
                            ?>
                            <div data-aos="zoom-in" class="item author-item mx-1" style="width: 550px;">
                            <div class="member-thumb">
                                <img style="width: 100%;" src="../app/View/<?php echo $row['img'] ?>" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <h3 style="color: white; margin:5px;">Cruise <?php echo $row['id-cruise'] ?></h3>
                                        <div style="color: white; margin:5px;">The cruise itinarary: <?php echo $row['cruise-itinerary']?></div>
                                        <div style="color: white; margin:5px;">The port of departure: <?php echo $row['port']?></div>
                                        <div style="color: white; margin:5px;">The date of departure: <?php echo $row['date-of-departure']?></div>
                                        <form method="post">
                                        <input style="display: none;" type="text" name="cruise" value="1">
                                        <input style="display: none;" type="text" name="price" value="<?php echo $row['price']?>">
                                        <?php if(isset($_SESSION["user"])){
                                            echo '<input type="submit" name="submit" class="btn disabled btn-outline-danger" value="left on '.$row['date-of-departure'].'">';
                                        }else{
                                            echo '<a href="login" class="btn btn-outline-success">Login to book</a>';
                                        }?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <h4><?php echo ".".$row['name']?></h4>
                        </div>
                            <?php
                        }
                        }
                        ?>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Feel free to keep in touch with us!</h2>
                        </div>
                        <ul class="contact-info">
                            <li><img src="../app/View/assets/images/contact-info-01.png" alt="">010-020-0860</li>
                            <li><img src="../app/View/assets/images/contact-info-02.png" alt="">info@company.com</li>
                            <li><img src="../app/View/assets/images/contact-info-03.png" alt="">www.company.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input data-aos="zoom-in-up" name="name" type="text" id="name" placeholder="Your Name *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input data-aos="zoom-in-up" name="phone" type="text" id="phone" placeholder="Your Phone" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input data-aos="zoom-in-up" name="email" type="email" id="email" placeholder="Your Email *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input data-aos="zoom-in-up" name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea data-aos="zoom-in-up" name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button data-aos="fade-right" type="submit" id="form-submit" class="main-button-icon">Send Message Now <i class="fa fa-arrow-right"></i></button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
          <div style="width: 100%; display:flex; justify-content:center;"><img style="width: 150px;" src="../app/View/assets/images/shipCruiseTour.png" alt="logo"></div>
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                        <p style="margin-top: 5px !important;">Copyright &copy; 2020 SHIP CRUISE TOUR 
                        
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
    
    <script src="../app/View/assets/js/jquery-2.1.0.min.js"></script>
    <script src="../app/View/assets/js/popper.js"></script>
    <script src="../app/View/assets/js/bootstrap.min.js"></script>
    <script src="../app/View/assets/js/costom.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" ></script>
    <script>
        AOS.init();
  
        document.addEventListener("DOMContentLoaded", function(){
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.getElementById('navbar_top').classList.add('fixed-top');
                document.getElementById('navbar_top').style.backgroundColor = "white";
                document.getElementById('nv').style.color = "black";
                var nvr = document.getElementsByClassName('nvr');

                for(var i=0; i<nvr.length; i++){
                    nvr[i].style.color = "green";
                }
                // add padding top to show content behind navbar
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top');
                document.getElementById('navbar_top').style.backgroundColor = "transparent";
                document.getElementById('nv').style.color = "white";
                var nvr = document.getElementsByClassName('nvr');
                for(var i=0; i<nvr.length; i++){
                    nvr[i].style.color = "white";
                }
                // remove padding top from body
                document.body.style.paddingTop = '0';
            } 
        });
        }); 
        if(<?php echo $r?> == 1){
            alert(" Thank you\n your reservation is booked");
        }
        if(<?php echo $r?> == 0){
            alert(" There is no more room left \n choose another room type");
        }
        function clossse(){
            var d = document.querySelector("#itinarary");
            d.style.display = "none";
        }
    </script>
  </body>
</html>