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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>

  </script>
</head>

<body>

  <!-- START THE NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?php echo base_url('/assets/images/logo/logo.png'); ?>" alt="logo image" width="60" height="60">&nbsp;&nbsp;&nbsp;SupplyTroopLK

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <?php

        if ($sess === true) {
          //sessions vailable start from here
        ?>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost/supplytroop/index.php/home/allAds">All Ads</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('/index.php/user/activeAds'); ?>">My Ads</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url("/index.php/user/postAd"); ?>">Post Ad</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url("/index.php/home/aboutus"); ?>">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url("/index.php/user/signOut"); ?>">Sign Out</a>
            </li>
            <!--  <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li> -->
          </ul>
        <?php
          //sessions avaible end from here
        } else {
          //sessions not available start from here
        ?>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost/supplytroop/index.php/home/allAds">All Ads</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-signup">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url("/index.php/home/aboutus"); ?>">About us</a>
            </li>
            <!--  <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li> -->
          </ul>
          <a href="#" data-bs-toggle="modal" data-bs-target="#modal-login">
            <button type="button" class="rounded-pill btn-rounded">
              Post an Ad
            </button>
          </a>
        <?php
          //session not available end from here
        }

        ?>
      </div>
    </div>
  </nav>

  <!-- START THE INTRODUCTION SECTION -->
  <section id="home" class="intro-section">
    <div class="container">
      <div class="row text-white">
        <!-- start the content fot intro -->
        <div class="col-12 col-lg-6 intros text-start">
          <h1 class="display-2">
            <span class="display-2--intro">Welcome to SupplyTroopLK For Great Deals!</span>
            <span class="display-2--description">Now you can buy or sell anything through SupplyTroopLK!</span>
            <span class="display-2--staysafe">Stay Safe while trading!</span>
            <span class="display-2--sfdescription">All ads are manually reviewed just for your protection</span>
            <span class="alert alert-warning">
              "It should be clearly mentioned that you are no allowed to deal animals or anything harmful to animals!"</span>
            </span>
          </h1>
        </div>
        <!-- start districts -->
        <div class="col-12 col-lg-6 text-center">
          <h3 class="dis mb-5">Districts</h3>
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-4 districts">
              <a href="<?php echo base_url('/index.php/home/allads/?dist=colombo') ?>" id="col">Colombo</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=ampara') ?>" id="am">Ampara</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=anuradhapura') ?>" id="an">Anuradhapura</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=badulla') ?>" id="ba">Badulla</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=batticaloa') ?>" id="bat">Batticaloa</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=gampaha') ?>" id="ga">Gampaha</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=hambantota') ?>" id="ha">Hambantota</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=jaffna') ?>" id="ja">Jaffna</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=kalutara') ?>" id="ka">Kalutara</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=kegalle') ?>" id="ke">Kegalle</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=kilinochchi') ?>" id="ki">Kilinochchi</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=kurunegala') ?>" id="ku">Kurunegala</a><br>
            </div>
            <div class="col-lg-6 col-md-4 districts">
              <a href="<?php echo base_url('/index.php/home/allads/?dist=mannar') ?>" id="ma">Mannar</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=matara') ?>" id="mat">Matara</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=moneragala') ?>" id="mo">Moneragala</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=mullativu') ?>" id="mu">Mullativu</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=nuwara eliya') ?>" id="nu">Nuwara Eliya</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=polonnaruwa') ?>" id="po">Polonnaruwa</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=puttalam') ?>" id="pu">Puttalam</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=rathnapura') ?>" id="ra">Rathnapura</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=trincomalee') ?>" id="tr">Trincomalee</a><br>
              <a href="<?php echo base_url('/index.php/home/allads/?dist=vavuniya') ?>" id="vu">Vavuniya</a><br>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- start the searchbar -->
    <div class="container mt-5">
      <div class="row searchFilter justify-content-center">
        <div class="col-md-8">
          <form action="<?php echo base_url('/index.php/home/allAds'); ?>" method="GET">
            <div class="input-group">
              <input id="table_filter" type="text" name="query" class="form-control" placeholder="What are you looking for?">
              <div class="input-group-btn">
                <button id="searchBtn" type="submit" class="btn btn-rounded"><span><i class="fas fa-search"></i></span></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,128L80,122.7C160,117,320,107,480,122.7C640,139,800,181,960,192C1120,203,1280,181,1360,170.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
  </section>

  <!-- START THE CATEGORIES SECTION -->
  <section id="categories" class="categories">
    <div class="container mt-0">
      <div class="row text-center">
        <div class="fw-bold lead mb-3">Browse</div>
        <div class="heading-line mb-5">

        </div>
      </div>
    </div>

    <!-- start categories content -->
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3">
          <div class="card shadow text-center">
            <a href="<?php echo base_url('/index.php/home/allads/?main=vehicles') ?>">
              <!-- <img src="assets/images/categories/vehicles.png" class="card-img-top" alt="catvehicle"> -->
              <!-- <a href="<?php echo base_url('/index.php/home/allads/?main=All') ?>"> -->
              <img src="<?php echo base_url('/assets/images/categories/vehicles.png'); ?>" class="card-img-top" alt="catvehicle">
              <div class="card-body ">
                <h3 class="text-center">Vehicles</h3>
                <p class="card-text">Browse used and brand new cars, motorbikes and any other vehicles in Sri Lanka.</p>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow text-center">
          <a href="<?php echo base_url('/index.php/home/allads/?main=electronics') ?>">
            <img src="<?php echo base_url('/assets/images/categories/electronic.png'); ?>" class="card-img-top" alt="electronics">
            <div class="card-body ">
              <h3 class="text-center">Electronics</h3>
              <p class="card-text">Find extreamly great deals for used and brand new electronics in Sri Lanka including mobile phones, computers, laptops, tabs, developments boards, TVs and much much more.</p>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow text-center">
        <a href="<?php echo base_url('/index.php/home/allads/?main=property/property/land') ?>">
          <img src="<?php echo base_url('/assets/images/categories/properties.png'); ?>" class="card-img-top" alt="properties">
          <div class="card-body ">
            <h3 class="text-center">Properties</h3>
            <p class="card-text">Find the great deals for apartments, commercial properties, houses & land.</p>
        </a>
      </div>
    </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow text-center">
        <a href="<?php echo base_url('/index.php/home/allads/?main=leisure/hobby') ?>">
          <img src="<?php echo base_url('/assets/images/categories/leisure.png'); ?>" class="card-img-top" alt="leisure">
          <div class="card-body ">
            <h3 class="text-center">Leisure</h3>
            <p class="card-text">Buy and sell any leisure items including radio control vehicles such as quadcopters, planes, cars and any rc accessories.</p>
        </a>
      </div>
    </div>
    </div>
    </div>

    <div class="row align-items-center">
      <div class="col-md-3">
        <div class="card shadow text-center ">
          <a href="<?php echo base_url('/index.php/home/allads/?main=services') ?>">
            <img src="<?php echo base_url('/assets/images/categories/services.png'); ?>" class="card-img-top" alt="services">
            <div class="card-body ">
              <h3 class="text-center">Services</h3>
              <p class="card-text">Buy and sell any service for great prices. Domestic service, IT service and much much more</p>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow text-center">
        <a href="<?php echo base_url('/index.php/home/allads/?main=kids Items') ?>">
          <img src="<?php echo base_url('/assets/images/categories/kids.png'); ?>" class="card-img-top" alt="kids">
          <div class="card-body ">
            <h3 class="text-center">Kids Items</h3>
            <p class="card-text">Find great deals for kids items. such as kids furniture, clothes and much more</p>
        </a>
      </div>
    </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow text-center">
        <a href="<?php echo base_url('/index.php/home/allads/?main=fashion') ?>">
          <img src="<?php echo base_url('/assets/images/categories/fashion.png'); ?>" class="card-img-top" alt="fashion">
          <div class="card-body ">
            <h3 class="text-center">Fashion</h3>
            <p class="card-text">Buy and sell any fashion items. Such as makeup kits, personal accessories, clothes and much more</p>
        </a>
      </div>
    </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow text-center">
        <a href="<?php echo base_url('/index.php/home/allads/?main=sports') ?>">
          <img src="<?php echo base_url('/assets/images/categories/sports.png'); ?>" class="card-img-top" alt="sports">
          <div class="card-body ">
            <h3 class="text-center">Sports</h3>
            <p class="card-text">Find extreamly great deals for sport equipments, suport supplements and much more.</p>
        </a>
      </div>
    </div>
    </div>
    </div>

    <div class="row align-items-center">
      <div class="col-md-3">
        <div class="card shadow text-center">
          <a href="<?php echo base_url('/index.php/home/allads/?main=education') ?>">
            <img src="<?php echo base_url('/assets/images/categories/learning.png'); ?>" class="card-img-top" alt="Learning">
            <div class="card-body ">
              <h3 class="text-center">Education</h3>
              <p class="card-text">Find great deals for tuition classes, personal tutors, text books & stationaries and much more</p>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow text-center">
        <a href="<?php echo base_url('/index.php/home/allads/?main=industrial') ?>">
          <img src="<?php echo base_url('/assets/images/categories/industry.png'); ?>" class="card-img-top" alt="Industry">
          <div class="card-body ">
            <h3 class="text-center">Industrial</h3>
            <p class="card-text">Buy and sell any industrial items like industrial tools, generators and much more.</p>
        </a>
      </div>
    </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow text-center">
        <a href="<?php echo base_url('/index.php/home/allads/?main=home & garden') ?>">
          <img src="<?php echo base_url('/assets/images/categories/household.png'); ?>" class="card-img-top" alt="Household">
          <div class="card-body ">
            <h3 class="text-center">Home & Garden</h3>
            <p class="card-text">View listings for home and garden items such as bathroom fittings and accessories, building items and tools and much more.</p>
        </a>
      </div>
    </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow text-center">
        <a href="<?php echo base_url('/index.php/home/allads/?main=food & agriculture') ?>">
          <img src="<?php echo base_url('/assets/images/categories/food.png'); ?>" class="card-img-top" alt="food">
          <div class="card-body ">
            <h3 class="text-center">Food & Agriculture</h3>
            <p class="card-text">Buy and sell foods, farming tools, Crop seeds and plants for extreamly great deals.</p>
        </a>
      </div>
    </div>
    </div>
    </div>

    <div class="row align-items-center">
      <div class="col-md-3">
        <div class="card shadow text-center">
          <a href="<?php echo base_url('/index.php/home/allads/?main=other') ?>">
            <img src="<?php echo base_url('/assets/images/categories/other.png'); ?>" class="card-img-top" alt="other">
            <div class="card-body ">
              <h3 class="text-center">Other</h3>
              <p class="card-text">Buy and sell any other item which is not categorized under categories</p>
          </a>
        </div>
      </div>
    </div>
    </div>
  </section>

 <?php
 include("partials/user-data-partial.php");
 ?>

  <!-- START THE FOOTER -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <!--contact number  -->
        <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
          <div class="contact-box__icon pt-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
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
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
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
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
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
            <img src="assets/images/logo/logo.png" alt="logo" width="50" height="50">
          </div>
          <hr class="bg-white d-inline-block mb-4" style="width: 120px; height: 2px;">
        </div>

        <div class="col-12 col-md-6 col-lg-3 mb-4 mx-auto">
          <h5 class="text-capitalize">Help & Support</h5>
          <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
          <ul class="list-inline info-list">
            <li><a href="http://localhost/supplytroop/index.php/home/contactus">Contact Us</a></li>
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
  <div id="snackbar">Registration success!</div>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    

    function signup_pwd() {

      var pwd = document.getElementById("signup_password");
      var Cpwd = document.getElementById("signup_confirm_pass");

      if (pwd.type == "text") {
        pwd.type = "password";
        Cpwd.type = "password";
      } else {
        pwd.type = "text";
        Cpwd.type = "text";
      }

    }

    $(document).ready(function() {
      
      //login end from here

      //signup start from here
      $("#signup_btn").click(function(event) {
        event.preventDefault();
        var btn = document.getElementById("signup_btn");
        $.ajax({
          url: "<?php echo base_url("/index.php/UserIdentification/signUp"); ?>",
          data: $("#signup_form").serialize(),
          dataType: "json",
          type: "post",
          beforeSend: function() {

            btn.disabled = true;
            $("#signup_spinner").show();
            $("#signup_fname_error").html(null);
            $("#signup_lname_error").html(null);
            $("#signup_email_error").html(null);
            $("#signup_pass_error").html(null);
            $("#signup_cpass_error").html(null);
            $("#signup_warning_container").hide();
            $("#signup_warning-msg").html(null);

          },
          success: function(signupRespData) {

            btn.disabled = false;
            $("#signup_spinner").hide();

            if (!signupRespData.success) {
              //form validation error start from here
              if (signupRespData.first_name != "") {
                $("#signup_fname_error").html(signupRespData.first_name);
              }

              if (signupRespData.second_name != "") {
                $("#signup_lname_error").html(signupRespData.second_name);
              }

              if (signupRespData.email != "") {
                $("#signup_email_error").html(signupRespData.email);
              }

              if (signupRespData.pass != "") {
                $("#signup_pass_error").html(signupRespData.pass);
              }

              if (signupRespData.confirm_pass != "") {
                $("#signup_cpass_error").html(signupRespData.confirm_pass);
              }


              //form validation error end from here
            } else {
              //form validation success start from here
              if (!signupRespData.user) {
                //user is available start from here
                $("#signup_warning-msg").html("Oops! This email using in this system. If you already have an account, Please login using your email and password.");
                $("#signup_warning_container").show();
                //user is available end from here
              } else {
                //user is not available start from here
                if (!signupRespData.register) {
                  //user registration error start from here
                  $("#signup_warning-msg").html("Oops! something went wrong! Please try again later");
                  //user registraton error end from here
                } else {
                  //user registration success start from here
                  $("#modal-signup").modal("toggle");
                  var x = document.getElementById("snackbar");
                  x.className = "show";
                  setTimeout(function() {
                    x.className = x.className.replace("show", "");
                  }, 3000);

                  setTimeout(function() {
                    $("#modal-login").modal("toggle");
                  }, 2000);
                  //user registration success end from here
                }
                //user is not available end from here
              }
              //form validation success end from here
            }

          }
        });

      });
      //signup end from here

    });
  </script>
</body>

</html>