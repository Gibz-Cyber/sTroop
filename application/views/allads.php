<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SupplyTroopLK</title>
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/style.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/fontawesome.css"); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;600;900&display=swap" rel="stylesheet">

    <script>
      
    </script>
</head>
<body>

    <!-- START THE NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo/logo.png" alt="logo image" width="60" height="60">&nbsp;&nbsp;&nbsp;SupplyTroopLK
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form class="d-flex">
                        <input class="form-control me-2" id="table-filter" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-rounded" type="submit">Search</button>
                    </form>
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

      <section id="alladds" class="all-ads">
            <div class="container">
                <!-- START THE CATEGORIES LIST -->
                <div class="row text-center">
                    <div class="col-12 col-lg-3 col-md-3 col-sm-4 col-xs-12 categories">
                        <div class="list-group list-group-flush">
                            <h3 class="fw-light category-title">
                                All categories
                            </h3>
                            <a href="#" class="list-group-item list-group-item-action active" aria-current="true"> All ads</a>
                            <a href="#" class="list-group-item list-group-item-action">Vehicles</a>
                            <a href="#" class="list-group-item list-group-item-action">Electronics</a>
                            <a href="#" class="list-group-item list-group-item-action">Property/Land</a>
                            <a href="#" class="list-group-item list-group-item-action">leisure/hobby</a>
                            <a href="#" class="list-group-item list-group-item-action">Services</a>
                            <a href="#" class="list-group-item list-group-item-action">Kids Items</a>
                            <a href="#" class="list-group-item list-group-item-action">Fashion</a>
                            <a href="#" class="list-group-item list-group-item-action">Sports</a>
                            <a href="#" class="list-group-item list-group-item-action">Education</a>
                            <a href="#" class="list-group-item list-group-item-action">Industrial</a>
                            <a href="#" class="list-group-item list-group-item-action">Home & Garden</a>
                            <a href="#" class="list-group-item list-group-item-action">Food & Agriculture</a>
                            <a href="#" class="list-group-item list-group-item-action">Other</a>
                            <a class="list-group-item list-group-item-action disabled">Other</a>
                            <div class="heading-line mb-5 mt-5"></div>
                        </div>
                        <div class="list-group list-group-flush">
                            <h3 class="fw-light category-title">
                                District
                            </h3>
                            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">All</a>
                            <a href="#" class="list-group-item list-group-item-action">Vehicles</a>
                            <a href="#" class="list-group-item list-group-item-action">Electronics</a>
                            <a href="#" class="list-group-item list-group-item-action">Property/Land</a>
                            <a href="#" class="list-group-item list-group-item-action">leisure/hobby</a>
                            <a href="#" class="list-group-item list-group-item-action">Services</a>
                            <a href="#" class="list-group-item list-group-item-action">Kids Items</a>
                            <a href="#" class="list-group-item list-group-item-action">Fashion</a>
                            <a href="#" class="list-group-item list-group-item-action">Sports</a>
                            <a href="#" class="list-group-item list-group-item-action">Education</a>
                            <a href="#" class="list-group-item list-group-item-action">Industrial</a>
                            <a href="#" class="list-group-item list-group-item-action">Home & Garden</a>
                            <a href="#" class="list-group-item list-group-item-action">Food & Agriculture</a>
                            <a href="#" class="list-group-item list-group-item-action">Other</a>
                            <a href="#" class="list-group-item list-group-item-action">Vehicles</a>
                            <a href="#" class="list-group-item list-group-item-action">Electronics</a>
                            <a href="#" class="list-group-item list-group-item-action">Property/Land</a>
                            <a href="#" class="list-group-item list-group-item-action">leisure/hobby</a>
                            <a href="#" class="list-group-item list-group-item-action">Services</a>
                            <a href="#" class="list-group-item list-group-item-action">Kids Items</a>
                            <a href="#" class="list-group-item list-group-item-action">Fashion</a>
                            <a href="#" class="list-group-item list-group-item-action">Sports</a>
                            <a href="#" class="list-group-item list-group-item-action">Education</a>
                            <a href="#" class="list-group-item list-group-item-action">Industrial</a>
                            <a href="#" class="list-group-item list-group-item-action">Home & Garden</a>
                            <a href="#" class="list-group-item list-group-item-action">Food & Agriculture</a>
                            <a href="#" class="list-group-item list-group-item-action">Other</a>
                            <a class="list-group-item list-group-item-action disabled">Other</a>
                            <div class="heading-line mb-5 mt-5"></div>
                        </div>        
                    </div>

                    <div class="col-12 col-lg-9 col-md-9 col-sm-8 col-xs-12 text-center">
                        <div class="wrap-shop-control">
                            <div class="wrap-right d-flex justify-content-center">
                                <div class="sort-item--orderby">
                                    <select name="orderby" class="use-chosen" >
                                        <option value="default" selected="selected">Default sorting</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                                <div class="sort-item--product-per-page">
                                    <select name="post-per-page" class="use-chosen" >
                                        <option value="12" selected="selected">12 per page</option>
                                        <option value="16">16 per page</option>
                                        <option value="18">18 per page</option>
                                        <option value="21">21 per page</option>
                                        <option value="24">24 per page</option>
                                        <option value="30">30 per page</option>
                                        <option value="32">32 per page</option>
                                    </select>
                                </div>
                            </div>

                          <!-- start ad grid -->
                          <div class="row">
                              <div class="col-9 col-lg-4 col-md-4 product-list product-grid">
                                
                                <div class="card"><!--card-->
                                  <a href="ad_description/description.view.php"><!--href-->
                                    <div class="d-flex justify-content-between align-items-center"><!--center-->
                                        <div class="align-items-center time"><!--time start from here-->
                                          <i class="bi bi-clock"></i> 3 Days
                                        </div><!--time end from here-->
                                    </div><!--center-->
                                      <div class="text-center"><!--text center start frin here-->
                                        <img src="https://i.imgur.com/TbtwkyW.jpg" width="200">
                                      </div><!--text center end form here-->
                                    <div class="card-body"><!--card body start from here-->
                                      <div class="text-center">
                                          <p>Amazon Echo</p> <span class="text-success">Rs:5000/=</span>
                                      </div>
                                      <div class="text-center">
                                          <p>Posted time:<span>14.30pm</span></p> 
                                      </div>
                                    </div><!--card body end form here-->
                                    
                                  </a><!--hrerf-->
                                </div><!--card-->
                              </div> 
                            </div>

                        </div>

                       
                        
                    </div>
                </div>    
            </div>
        </section>

       <!-- START THE MODEL FOR SIGNUP FORM -->
      <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="modal-signup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title display-4--modaltitle text-capitalize" id="staticBackdropLabel">Sign up for SupplyTroopLK</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- start form -->
                <form class="form-horizontal signup-form p-3" action="#">
                  <div class="mb-3 ">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter your fitst name">
                  </div>
                  <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Enter your last name">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email address">
                  </div>

                  <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" id="Password" class="form-control" aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text">
                      Your password must be 6-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Repeat Password</label>
                    <input type="password" id="confirmPassword" class="form-control" aria-describedby="passwordHelpBlock">
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Show Password</label>
                  </div>
                  <div class="submit-btn mt-4 align-items-center">
                    <button type="submit" class="rounded-pill" id="#" value="#">Sign up</button>
                  </div>
                  
                </form>
              </div>
              <div class="modal-footer justify-content-center">
                <img src="assets/images/logo/logo_black.jpg" alt="logo image" width="60" height="60">&nbsp;&nbsp;&nbsp;&copy;SupplyTroopLK
              </div>
            </div>
          </div>
        </div>


        <!-- START THE LOGIN FORM -->
        <div class="modal fade" id="modal-login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title display-4--modaltitle text-capitalize" id="staticBackdropLabel">Login to SupplyTroopLK</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- start form -->
                <form class="form-horizontal signup-form p-3" action="#">
                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="lemail">
                  </div>

                  <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" id="lPassword" class="form-control" aria-describedby="passwordHelpBlock">
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="lflexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Show Password</label>
                  </div>
                  <div class="submit-btn mt-4 align-items-center">
                    <button type="submit" class="rounded-pill"  value="#">Log in</button>
                  </div>
                </form>
                <div class="redirect-signup p-3">
                  <p>Don't have an account yet? <span><a href="javascript: OpenSignup();" data-bs-toggle="modal" data-bs-target="#modal-signup" data-bs-dismiss="modal">Click here</a></span></p>
                </div>
              </div>
              <div class="modal-footer justify-content-center">
                <img src="assets/images/logo/logo_black.jpg" alt="logo image" width="60" height="60">&nbsp;&nbsp;&nbsp;&copy;SupplyTroopLK
              </div>
            </div>
          </div>
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
                <img src="assets/images/logo/logo.png"  alt="logo" width="50" height="50">
              </div>
              <hr class="bg-white d-inline-block mb-4" style="width: 120px; height: 2px;">
            </div>
            
            <div class="col-12 col-md-6 col-lg-3 mb-4 mx-auto">
              <h5 class="text-capitalize">Help & Support</h5>
              <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
              <ul class="list-inline info-list">
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="helpnsupport.html">How to Sell Fast</a></li>
                <li><a href="staysafe.html">safety policy</a></li>
              </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4 mx-auto">
              <h5 class="text-capitalize">About Us</h5>
              <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
              <ul class="list-inline info-list">
                <li><a href="aboutus.html">Who we are</a></li>
                <li><a href="terms.html">Terms & Conditions</a></li>
                <li><a href="privacypolicy.html">Privacy Policy</a></li>
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

        

        

        
        
        
        




        <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>