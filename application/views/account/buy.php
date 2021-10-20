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
            <a class="navbar-brand" href="<?php echo base_url(''); ?>">
                <img src="<?php echo base_url('/assets/images/logo/logo.png'); ?>" alt="logo image" width="60" height="60">&nbsp;&nbsp;&nbsp;SupplyTroopLK
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url('/index.php/home/allAds'); ?>">All Ads</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url('/index.php/user/activeAds'); ?>">My Ads</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url('/index.php/user/postAd'); ?>"">Post another ad</a>
              </li>
             <!--  <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li> -->
              <!-- <li class="nav-item">
                  <a href="chat.php" class="nav-link">Messages<sup id="count" class="badge badge-danger"></sup>
                </a>
              </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?php echo base_url('/index.php/user/account'); ?>">My Account</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url('index.php/user/signOut'); ?>">Sign Out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- START THE POST AN AD SECTION -->
      <section id="start-all-items" class="all-items">
        <div class="container">
            <div class="all-items-title w-100 pt-5 mt-5 text-center">
              <h3 class="display-4--title mt-1 fw-bold">What do you want to buy?</h3>
            </div>
        </div>
    </section>

    <!-- START THE CATEGORIES SECTION -->
    <section id="items-categories" class="categories all-items-categories">

        <!-- start categories content -->
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="card shadow text-center" >
                <a href="<?php echo base_url('/index.php/user/buyAdPosting?adCategory=vehicles'); ?>">
                    <img src="<?php echo base_url('/assets/images/categories/vehicles.png'); ?>" class="card-img-top"  alt="catvehicle">
                  <div class="card-body ">
                    <h3 class="text-center">Vehicles</h3>                   
                </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card shadow text-center" >
                <a href="<?php echo base_url('/index.php/user/buyAdPosting?adCategory=electronics'); ?>">
                    <img src="<?php echo base_url('/assets/images/categories/electronic.png'); ?>" class="card-img-top"  alt="electronics" >
                  <div class="card-body ">
                    <h3 class="text-center">Electronics</h3>                   
                </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card shadow text-center" >
                <a href="<?php echo base_url('/index.php/user/buyAdPosting?adCategory=properties'); ?>">
                    <img src="<?php echo base_url('/assets/images/categories/properties.png'); ?>" class="card-img-top"  alt="properties">
                  <div class="card-body ">
                    <h3 class="text-center">Properties</h3>                    
                </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card shadow text-center" >
                <a href="<?php echo base_url('/index.php/user/buyAdPosting?adCategory=leisure'); ?>">
                    <img src="<?php echo base_url('/assets/images/categories/leisure.png'); ?>" class="card-img-top"  alt="leisure">
                  <div class="card-body ">
                    <h3 class="text-center">Leisure</h3>                   
                </a>
                </div>
              </div>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="card shadow text-center " >
                <a href="<?php echo base_url('/index.php/user/buyAdPosting?adCategory=services'); ?>">
                    <img src="<?php echo base_url('/assets/images/categories/services.png'); ?>" class="card-img-top"  alt="services">
                  <div class="card-body ">
                    <h3 class="text-center">Services</h3>                   
                </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card shadow text-center" >
                <a href="<?php echo base_url('/index.php/user/buyAdPosting?adCategory=kids items'); ?>">
                    <img src="<?php echo base_url('/assets/images/categories/kids.png'); ?>" class="card-img-top"  alt="kids">
                  <div class="card-body ">
                    <h3 class="text-center">Kids Items</h3>                                        
                </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card shadow text-center" >
                <a href="<?php echo base_url('/index.php/user/buyAdPosting?adCategory=fashion'); ?>">
                    <img src="<?php echo base_url('/assets/images/categories/fashion.png'); ?>" class="card-img-top"  alt="fashion">
                  <div class="card-body ">
                    <h3 class="text-center">Fashion</h3>                                       
                </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card shadow text-center" >
                <a href="<?php echo base_url('/index.php/user/buyAdPosting?adCategory=sports'); ?>">
                    <img src="<?php echo base_url('/assets/images/categories/sports.png'); ?>" class="card-img-top"  alt="sports">
                  <div class="card-body ">
                    <h3 class="text-center">Sports</h3>                                       
                </a>
                </div>
              </div>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="card shadow text-center" >
                <a href="<?php echo base_url('/index.php/user/buyAdPosting?adCategory=education'); ?>">
                    <img src="<?php echo base_url('/assets/images/categories/learning.png'); ?>" class="card-img-top"  alt="Learning">
                  <div class="card-body ">
                    <h3 class="text-center">Education</h3>                                        
                </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card shadow text-center" >
                <a href="<?php echo base_url('/index.php/user/buyAdPosting?adCategory=industrial'); ?>">
                    <img src="<?php echo base_url('/assets/images/categories/industry.png'); ?>" class="card-img-top"  alt="Industry" >
                  <div class="card-body ">
                    <h3 class="text-center">Industrial</h3>                                        
                </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card shadow text-center" >
                <a href="<?php echo base_url('/index.php/user/buyAdPosting?adCategory=home and garden'); ?>">
                    <img src="<?php echo base_url('/assets/images/categories/household.png'); ?>" class="card-img-top"  alt="Household">
                  <div class="card-body ">
                    <h3 class="text-center">Home & Garden</h3>                                      
                </a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card shadow text-center" >
                <a href="<?php echo base_url('/index.php/user/buyAdPosting?adCategory=food and agriculture'); ?>">
                    <img src="<?php echo base_url('/assets/images/categories/food.png'); ?>" class="card-img-top"  alt="food">
                  <div class="card-body ">
                    <h3 class="text-center">Food & Agriculture</h3>           
                </a>
                </div>
              </div>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-md-3">
              <div class="card shadow text-center">
                <a href="<?php echo base_url('/index.php/user/buyAdPosting?adCategory=other'); ?>">
                    <img src="<?php echo base_url('/assets/images/categories/other.png'); ?>" class="card-img-top"  alt="other">
                  <div class="card-body ">
                    <h3 class="text-center">Other</h3>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>









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
                <a href="https://github.com/Gibz-Cyber/sTroop"><i class="fab fa-github"></i></a>
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
                <img src="<?php echo base_url('/assets/images/logo/logo.png'); ?>"  alt="logo" width="50" height="50">
              </div>
              <hr class="bg-white d-inline-block mb-4" style="width: 120px; height: 2px;">
            </div>
            
            <div class="col-12 col-md-6 col-lg-3 mb-4 mx-auto">
              <h5 class="text-capitalize">Help & Support</h5>
              <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
              <ul class="list-inline info-list">
                <li><a  href="http://localhost/supplytroop/index.php/home/contactus">Contact Us</a></li>
                <li><a href="http://localhost/supplytroop/index.php/home/faq">FAQ</a></li>
                <li><a href="http://localhost/supplytroop/index.php/home/sellfast">How to Sell Fast</a></li>
                <li><a href="http://localhost/supplytroop/index.php/home/safetypolicy">safety policy</a></li>
              </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4 mx-auto">
              <h5 class="text-capitalize">About Us</h5>
              <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
              <ul class="list-inline info-list">
                <li><a href="http://localhost/supplytroop/index.php/home/aboutus">Who we are</a></li>
                <li><a href="http://localhost/supplytroop/index.php/home/terms">Terms & Conditions</a></li>
                <li><a href="http://localhost/supplytroop/index.php/home/privacypolicy">Privacy Policy</a></li>
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