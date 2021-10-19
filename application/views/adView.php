<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SupplyTroopLK</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/fontawesome.css'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;600;900&display=swap" rel="stylesheet">

    <script>
      
    </script>
</head>
<body>

    <!-- START THE NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../assets/images/logo/logo.png" alt="logo image" width="60" height="60">&nbsp;&nbsp;&nbsp;SupplyTroopLK
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="allads.php">All Ads</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-signup">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.html">About us</a>
              </li>
             <!--  <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li> -->
            </ul>
            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-login" >
              <button type="button" class="rounded-pill btn-rounded">
                Post an Ad
              </button>
            </a>
          </div>
        </div>
      </nav>

      <!-- START SECTION -->
      <div class="container ad-description" style="margin-top:10rem;">
        
        <?php

        if($adData === false){
        //ad error end from here
        echo "<div class='alert alert-danger'><p align='center'>403 fobidden</p></div>";
        //ad error end from here
        }else{
          //ad success start from here

          if($adData->ad_type == "sell"){
            
            ?>
            <div class="row">
          <div class="col-12 col-md-8">
            <!-- Carousel -->
            <div id="demo" class="carousel slide p-2" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo $adData->image_1; ?>" alt="" style="width: 100%" height="350">
              </div>
              <?php

                if($adData->image_2 != "NULL"){

                echo "<div class='carousel-item'>
                <img src='{$adData->image_2}' alt='' style='width: 100%' height='350'>
              </div>";

                }


                if($adData->image_3 != ""){
                  echo "<div class='carousel-item'>
                <img src='{$adData->image_3}' alt=''style='width: 100%' height='350'>
              </div>";
                }

                 if($adData->image_4 != ""){
                  echo "<div class='carousel-item'>
                <img src='{$adData->image_4}' alt='' style='width: 100%' height='350'>
              </div>";

            }

              if($adData->image_5 != ""){
                  echo "<div class='carousel-item'>
                <img src='{$adData->image_5}' alt='' style='width: 100%' height='350'>
              </div>";
                }

              ?>
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev btn-danger" type="button" data-bs-target="#demo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
            </div>
          </div>
        </div>

        <!--mobile numbers start from here-->
        <div class="col-12 col-md-4">

          <div class="border border rounded">
            <br>
            <h4 align='center'><?php echo $adData->first_name; ?></h4><hr>

            <?php

              if($adData->phone_1 != "NULL"){

                echo "<h5 align='center'>{$adData->phone_1}</h5>";

              }

              if($adData->phone_2 != "NULL"){

                echo "<h5 align='center'>{$adData->phone_2}</h5>";

              }

               if($adData->phone_3 != "NULL"){

                echo "<h5 align='center'>{$adData->phone_3}</h5>";

              }

            ?>

          </div>

        </div>
        <!--mobile numbers end froom here-->
      </div>
            <?php

          }else{
          
            ?>

            <div class="mx-auto col-sm-12 col-md-6">

              <div class="border border rounded">
                <br>
                <h4 align='center'><?php echo $adData->first_name; ?></h4><hr>

                <?php

                  if($adData->phone_1 != "NULL"){

                    echo "<h5 align='center'>{$adData->phone_1}</h5>";

                  }

                  if($adData->phone_2 != "NULL"){

                    echo "<h5 align='center'>{$adData->phone_2}</h5>";

                  }

                   if($adData->phone_3 != "NULL"){

                    echo "<h5 align='center'>{$adData->phone_3}</h5>";

                  }

                ?>

              </div>

            </div>

            <?php

          }

          ?>

          <h4 align="center"><?php echo $adData->title; ?></h4>

          <div class="row">

            <div class="col-sm-12 col-md-8">

              <p><?php echo $adData->description; ?></p>

            </div>

            <div class="col-sm-12 col-md-4">

              <ul class="list-group">
                <li class="list-group-item">Main Category : <strong><?php echo $adData->main_category; ?></strong></li>
                <li class="list-group-item">Sub Category : <strong><?php echo $adData->sub_category; ?></strong></li>
                <li class="list-group-item">Posted : <strong><?php echo $adData->posted_timestamp; ?></strong></li>
                <li class="list-group-item">Price : <strong><?php echo  $adData->price; ?> LKR</strong></li>
                <?php
                  if($adData->nego_status != "NULL"){
                    echo "<li class='list-group-item'>Price Status : <strong>{$adData->nego_status}</strong></li>";
                  }
                ?>
              </ul>

            </div>

          </div>

          <?php

          //ad success end from here
        }

        ?>

    </div>
      



     <!-- START THE FOOTER -->
     <footer class="footer">
        <div class="container">
          <div class="row">
            <!--contact number  -->
            <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
              <div class="contact-box__icon pt-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call"  viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                  <path d="M15 7a2 2 0 0 1 2 2" />
                  <path d="M15 3a6 6 0 0 1 6 6" />
                </svg>
              </div>
              <div class="contact-box__info">
                <a href="#" class="contact-box__info--title">+9411-213-3456</a>
                <p class="contact-box__info--subtitle">mon-fri 9am-5pm</p>
              </div>
            </div>
            <!-- email -->
            <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
              <div class="contact-box__icon pt-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail"  viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <rect x="3" y="5" width="18" height="14" rx="2" />
                  <polyline points="3 7 12 13 21 7" />
                </svg>
              </div>
              <div class="contact-box__info">
                <a href="#" class="contact-box__info--title">SPtroop.lk@gmail.com</a>
                <p class="contact-box__info--subtitle">Online Support</p>
              </div>
            </div>
            <!-- location -->
            <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
              <div class="contact-box__icon pt-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2"  viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <line x1="18" y1="6" x2="18" y2="6.01" />
                  <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                  <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                  <line x1="9" y1="4" x2="9" y2="17" />
                  <line x1="15" y1="15" x2="15" y2="20" />
                </svg>
              </div>
              <div class="contact-box__info">
                <a href="#" class="contact-box__info--title">Colombo</a>
                <p class="contact-box__info--subtitle">Sri Lanka</p>
              </div>
            </div>
          </div>
        </div>

        <!-- start social media links -->
        <div class="footer-sm" style="background-color:#212121;">
          <div class="container">
            <div class="row pt-4 text-center text-white">
              <div class="col-lg-5 col-md-6 mb-4">
                <p>Connect with us on Social Media</p>
              </div>
              <div class="col-lg-7 col-md-6 mb-4">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- start info -->
        <div class="container mt-5">
          <div class="row info text-white justify-content-center mt-3 pb-3">
            <div class="col-12 col-sm-6 col-lg-6 company-name">
              <h5 class="text-capitalize">SupplyTroopLK</h5>
              <div class="company-logo">
                <img src="../../../assets/images/logo/logo.png"  alt="logo" width="50" height="50">
              </div>
              <hr class="bg-white d-inline-block mb-4" style="width: 120px; height: 2px;">
            </div>
            
            <div class="col-12 col-md-6 col-lg-3 mb-4 mx-auto">
              <h5 class="text-capitalize">Help & Support</h5>
              <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
              <ul class="list-inline info-list">
                <li><a href="../contactus.html">Contact Us</a></li>
                <li><a href="../faq.html">FAQ</a></li>
                <li><a href="../helpnsupport.html">How to Sell Fast</a></li>
                <li><a href="../staysafe.html">safety policy</a></li>
              </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4 mx-auto">
              <h5 class="text-capitalize">About Us</h5>
              <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
              <ul class="list-inline info-list">
                <li><a href="../aboutus.html">Who we are</a></li>
                <li><a href="../terms.html">Terms & Conditions</a></li>
                <li><a href="../privacypolicy.html">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- copyright info -->
        <div class="footer-bottom pt-3 pb-3">
          <div class="container">
            <div class="row text-center text-white">
              <div class="col-12">
                <div class="footer-bottom__copyright">
                  &copy;Copyright 2021 <a href="#">SupplyTroopLk</a> | created by <a href="#">Domain Masters</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <!-- back to top button -->
      <a href="#" class="shadow btn btn-primary rounded-circle back-to-top">
        <i class="fas fa-chevron-up"></i>
      </a>


      <script src="<?php echo base_url('/assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>