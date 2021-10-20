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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
      
    </script>
</head>
<body>

     <!-- START THE NAVBAR -->
     <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../../../index.php">
                <img src="../../../assets/images/logo/logo.png" alt="logo image" width="60" height="60">&nbsp;&nbsp;&nbsp;SupplyTroopLK
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../../../allads.php">All Ads</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">My Ads</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../../postad.html">Post another ad</a>
              </li>
             <!--  <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li> -->
              <li class="nav-item">
                  <a href="chat.php" class="nav-link">Messages<sup id="count" class="badge badge-danger"></sup>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>My Account</a></li>
                  <li>Sign Out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- start electronics section -->
      <section id="contact" class="ad-electronic">
        <div class="container">
            <div class="row">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" id="pro"><h6 id="pro1">Step 1</h6></div>
            </div>
           <!--left corner categegory selecter start from here-->
            <div class="row text-white justify-content-center mt-3">
                <div class="col-10 col-lg-3 gradient shadow mt-3 p-3">
                  <h4 class="d-flex justify-content-center"><?php echo $_GET['adCategory']; ?></h4>
                    <div class="cta-info w-100  text-center ">
                      <h4 class="fw-light p1 p-3 text-Capitalize ">Select <?php echo $_GET['adCategory']; ?> Category</h4>
                      <form action="#" class="row" id="meta-data">
                      <div class="select-electronics">
                        <select name="cases" id="cases">
                              <!--cases start from here-->
                              <?php

                                if($_GET['adCategory'] == "electronics"){
                                  //electronics category start from here
                                  ?>
                                  <option value="">--Select--</option>
                                  <option value="Development boards and accessories" >Development boards & accessories</option>
                                  <option value="Air condition and accessories" >Air condition & accessories</option>
                                  <option value="video games, consoles and accessories" >video games, consoles & accessories</option>
                                  <option value="Electronic appliances for home" >Electronic appliances for home</option>
                                  <option value="Mobile phone accessories" >Mobile phone accessories</option>
                                  <option value="Computers & tablets" >Computers & tablets</option>
                                  <option value="Mobile Phones" >Mobile Phones</option>
                                  <option value="computer accessories" >computer accessories</option>
                                  <option value="video accessories" >video accessories</option>
                                  <option value="Tv" >Tv</option>
                                  <option value="Cameras" >Cameras</option>
                                  <option value="Audio" >Audio</option>
                                  <option value="Other Electronics" >Other Electronics</option>
                                  <?php
                                  //electronics category end from here
                                }else if($_GET['adCategory'] == "vehicles"){
                                  //vehicles category start from here
                                  ?>
                                  <option value="">--Select--</option>
                                  <option value="Auto parts and accessories">Auto parts and accessories</option>
                                  <option value="Motor bikes">Motor bikes</option>
                                  <option value="Vans buses and Lorries">Vans buses and Lorries</option>
                                  <option value="escavation vehicles">escavation vehicles</option>
                                  <option value="Bicycle">Bicycle</option>
                                  <option value="Tuk Tuk">Tuk Tuk</option>
                                  <option value="Car">Car</option>
                                  <option value="water crafts">water crafts</option>
                                  <?php
                                  //vehicles category end from here
                                }else if($_GET['adCategory'] == "leisure"){
                                  //leisure category start from here
                                  ?>
                                  <option value="">--Select--</option>
                                  <option value="Art, Books, Music and Videos">Art, Books, Music and Videos</option>
                                  <option value="Rc Vehicles and accessories">Rc Vehicles and accessories</option>
                                  <option value="Events and Tickets">Events and Tickets</option>
                                  <option value="Other Hobby Items">Other Hobby Items</option>
                                  <option value="Musical Instruments">Musical Instruments</option>
                                  <?php
                                  //leisure category end from here
                                }else if($_GET['adCategory'] == "properties"){
                                  //properties category start from here
                                  ?>
                                  <option value="">--Select--</option>
                                  <option value="Apartments">Apartments</option>
                                  <option value="Commercial Properties">Commercial Properties</option>
                                  <option value="Houses">Houses</option>
                                  <option value="Lands">Lands</option>
                                  <?php
                                  //properties category end from here
                                }else if($_GET['adCategory'] == "services"){
                                  //services category start from here
                                  ?>
                                  <option value="">--Select--</option>
                                  <option value="Domestic services">Domestic services</option>
                                  <option value="Event services">Event services</option>
                                  <option value="Other services">Other services</option>
                                  <option value="Trade services">Trade services</option>
                                  <option value="Salon">Salon</option>
                                  <option value="IT services">IT services</option>
                                  <?php
                                  //sercvises category end from here
                                }else if($_GET['adCategory'] == "kids items"){
                                  //KIDS ITEMS START FROM HERE
                                  ?>
                                  <option value="Children items">Children items</option>
                                  <?php
                                  //KIDS ITEMS END FROM HERE
                                }else if($_GET['adCategory'] == "fashion"){
                                  //fashion start from here
                                  ?>
                                  <option value="">--Select--</option>
                                  <option value="Bags and Luggages">Bags & Luggages</option>
                                  <option value="Other Fashion Accessories">Other Fashion Accessories</option>
                                  <option value="Personal Accessories">Personal Accessories</option>
                                  <option value="Clothes">Clothes</option>
                                  <option value="Jewellery">Jewellery</option>
                                  <option value="Footwear">Footwear</option>
                                  <option value="Optacle Items">Optacle Items</option>
                                  <option value="Salon Accessories">Salon Accessories</option>
                                  <option value="Watches">Watches</option>
                                  <?php
                                  //fashion end from here
                                }else if($_GET['adCategory'] == "sports"){
                                  //sports start from here
                                  ?>
                                  <option value="">--Select--</option>
                                  <option value="Sport Equipments">Sport Equipments</option>
                                  <option value="Sport Supplyments">Sport Supplyments</option>
                                  <option value="Other sport items">Other sport items</option>
                                  <?php
                                  //sports end from here
                                }else if($_GET['adCategory'] == "education"){
                                  //education start from here
                                  ?>
                                  <option value="">--Select--</option>
                                  <option value="Higher Education">Higher Education</option>
                                  <option value="Other Education">Other Education</option>
                                  <option value="Tuition Classes">Tuition Classes</option>
                                  <option value="Text Books">Text Books</option>
                                  <?php
                                  //education start from here
                                }else if($_GET['adCategory'] == "industrial"){
                                  //industrial start from here
                                  ?>
                                  <option value="">--Select--</option>
                                  <option value="Industrial Tools">Industrial Tools</option>
                                  <option value="Generators">Generators</option>
                                  <option value="Healthcare Equipments">Healthcare Equipments</option>
                                  <option value="Office Equipments">Office Equipments</option>
                                  <option value="Other Business and Industry">Other Business & Industry</option>
                                  <?php
                                  //industrial end from here
                                }else if($_GET['adCategory'] == "home and garden"){
                                  //home and garden start from here
                                  ?>
                                  <option value="">--Select--</option>
                                  <option value="Bathroom Fittings and Accessories">Bathroom Fittings & Accessories</option>
                                  <option value="Building Items and Tools">Building Items & Tools</option>
                                  <option value="Garden Items and Tools">Garden Items & Tools</option>
                                  <option value="Home Decorations">Home Decorations</option>
                                  <option value="Furniture">Furniture</option>
                                  <option value="Kitchen Items">Kitchen Items</option>
                                  <option value="Other Items">Other Items</option>
                                  <?php
                                  //home and garden end from here
                                }else if($_GET['adCategory'] == "food and agriculture"){
                                  //food and agriculture start from here
                                  ?>
                                  <option value="">--Select--</option>
                                  <option value="Farming Tools, Machinery and Accessories">Farming Tools, Machinery & Accessories</option>
                                  <option value="Other Foods and Agriculture">Other Foods & Agriculture</option>
                                  <option value="Crops, Seeds and Plants">Crops, Seeds & Plants</option>
                                  <option value="Foods">Foods</option>
                                  <?php
                                  //food and agriculture end from here
                                }else if($_GET['adCategory'] == "other"){
                                  //other start form here
                                  ?>
                                  <option value="Other">Other</option>
                                  <?php
                                  //other end from here
                                }

                              ?>
                              <!--cases end from here-->
                        </select> 
                      </div><small id="case-error" style="color: yellow;"></small>
                    </div>
                </div>
              <!--left corner category selector end from here-->
                <div class="col-12 col-lg-9 shadow mt-3 p-1">
                    <div class="form w-100 pb-2">
                        

                            <!-- start step 1 for categories -->
                            <div class="step-1">
                                <h2 class="text-center">Step 1</h3>

                                 <!-- <div id="1-step1" class="step1">
                                    <div class="row">-->
                                          <!--<div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                              <label>Device type (Required)</label>
                                              <select name="d_type" class="form-control" required>
                                                <option value="">--Select--</option>
                                                <option value="Arduino">Arduino</option>
                                                <option value="LattePanda">LattePanda</option>
                                                <option value="Microbit">Microbit</option>
                                                <option value="Node MCU">Node MCU</option>
                                                <option value="Raspberry pi">Raspberry pi</option>
                                                <option value="Other Development Board">Other Development Board</option>
                                                <option value="Development Board Accessories">Development Board Accessories</option>
                                                <option value="Development Board Kit">Development Board Kit</option>
                                                </select>
                                            </div>
                                          </div>-->
                                          <!--<div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                          <label>Condition (Required)</label><br>
                                          <input type="radio" name="con" value="New" required>New<br>
                                          <input type="radio" name="con" value="Used" required>Used
                                        </div>
                                      </div>
                                    </div>
                                  </div>-->
    
                               <!-- <div id="2-step1" class="step1">
                                  <div class="form-group">
                                    <label>Condition (Required)</label><br>
                                    <input type="radio" name="con" value="New" required>New<br>
                                    <input type="radio" name="con" value="Used" required>Used
                                  </div>
                                </div>-->

                               <!-- <div id="3-step1" class="step1">
                                  <div class="form-group">
                                    <label>Condition (Required)</label><br>
                                    <input type="radio" name="con" value="New" required>New<br>
                                    <input type="radio" name="con" value="Used" required>Used
                                  </div>
                                </div>

                                <div id="4-step1" class="step1">
                                  <div class="form-group">
                                    <label>Condition (Required)</label><br>
                                    <input type="radio" name="con" value="New" required>New<br>
                                    <input type="radio" name="con" value="Used" required>Used
                                  </div>
                                </div>
    
                                <div id="5-step1" class="step1">
                                    <div class="row">
                                      <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                          <label>Brand (Required)</label>
                                          <select name="brand" class="form-control" required>
                                            <option value="">--Select--</option>
                                            <option value="For All Brands">For All Brands</option>
                                            <option value="Acer">Acer</option>
                                            <option value="Alcatel">Alcatel</option>
                                            <option value="Apple">Apple</option>
                                            <option value="Asus">Asus</option>
                                            <option value="BlackBerry">BlackBerry</option>
                                            <option value="Dialog">Dialog</option>
                                            <option value="E-tel">E-tel</option>
                                            <option value="Google">Google</option>
                                            <option value="Greentel">Greentel</option>
                                            <option value="HTC">HTC</option>
                                            <option value="Huawei">Huawei</option>
                                            <option value="Lenovo">Lenovo</option>
                                            <option value="LG">LG</option>
                                            <option value="Micromax">Micromax</option>
                                            <option value="Microsoft">Microsoft</option>
                                            <option value="Nokia">Nokia</option>
                                            <option value="OnePlus">OnePlus</option>
                                            <option value="Oppo">Oppo</option>
                                            <option value="Other Barnd">Other Brand</option>
                                            <option value="Philips">Philips</option>
                                            <option value="Samsung">Samsung</option>
                                            <option value="Sony Ericsson">Sony Ericsson</option>
                                            <option value="Sony">Sony</option>
                                            <option value="Vivo">Vivo</option>
                                            <option value="Xiaomi">Xiaomi</option>
                                            <option value="Zigo">Zigo</option>
                                            <option value="ZTE">ZTE</option>
                                            </select>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                      <label>Condition (Required)</label><br>
                                      <input type="radio" name="con" value="New" required>New<br>
                                      <input type="radio" name="con" value="Used" required>Used
                                    </div>
                                  </div>
                                </div>
                              </div>
    
                              <div id="6-step1" class="step1">
                                    <div class="row">
                                      <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                          <label>Device type (Required)</label>
                                          <select name="d_type" class="form-control" required>
                                            <option value="">--Select--</option>
                                            <option value="Desktop Computers">Desktop Computers</option>
                                            <option value="Laptop | Notebook">Laptop | Notebook</option>
                                            <option value="Tablet">Tablet</option>
                                            </select>
                                        </div>
                                      </div>
                                      <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                      <label>Condition (Required)</label><br>
                                      <input type="radio" name="con" value="New" required>New<br>
                                      <input type="radio" name="con" value="Used" required>Used
                                    </div>
                                  </div>
                                </div>
                              </div>
    
                              <div id="7-step1" class="step1">
                                    <div class="row">
                                      <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                          <label>Brand (Required)</label>
                                          <select name="brand" class="form-control" required>
                                            <option value="">--Select--</option>
                                            <option value="Acer">Acer</option>
                                            <option value="Alcatel">Alcatel</option>
                                            <option value="Apple">Apple</option>
                                            <option value="Asus">Asus</option>
                                            <option value="BlackBerry">BlackBerry</option>
                                            <option value="Dialog">Dialog</option>
                                            <option value="E-tel">E-tel</option>
                                            <option value="Google">Google</option>
                                            <option value="Greentel">Greentel</option>
                                            <option value="HTC">HTC</option>
                                            <option value="Huawei">Huawei</option>
                                            <option value="Lenovo">Lenovo</option>
                                            <option value="LG">LG</option>
                                            <option value="Micromax">Micromax</option>
                                            <option value="Microsoft">Microsoft</option>
                                            <option value="Nokia">Nokia</option>
                                            <option value="OnePlus">OnePlus</option>
                                            <option value="Oppo">Oppo</option>
                                            <option value="Other Barnd">Other Brand</option>
                                            <option value="Philips">Philips</option>
                                            <option value="Samsung">Samsung</option>
                                            <option value="Sony Ericsson">Sony Ericsson</option>
                                            <option value="Sony">Sony</option>
                                            <option value="Vivo">Vivo</option>
                                            <option value="Xiaomi">Xiaomi</option>
                                            <option value="Zigo">Zigo</option>
                                            <option value="ZTE">ZTE</option>
                                            </select>
                                        </div>
                                      </div>
                                  <div class="col-sm-6 col-md-6">
                                      <div class="form-group">
                                        <label>Condition (Required)</label><br>
                                        <input type="radio" name="con" value="New" required>New<br>
                                        <input type="radio" name="con" value="Used" required>Used
                                      </div>
                                    </div>
                                  </div>
                              </div>
    
                              <div id="8-step1" class="step1">
                                <div class="row">
                                  <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                      <label>Device type (Required)</label>
                                      <select name="d_type" class="form-control" required>
                                        <option value="">--Select--</option>
                                        <option value="Hard drive / Memory">Hard drive</option>
                                        <option value="Modem / Router">Modem / Router</option>
                                        <option value="Monitor">Monitor</option>
                                        <option value="Lcd Panel">Lcd panel</option>
                                        <option value="Printer / Scanner">Printer / Scanner</option>
                                        <option value="Softwear">Softwear</option>
                                        <option value="RAM">RAM</option>
                                        <option value="SD Cards">SD Cards</option>
                                        <option value="Pen Drive">Pen Drive</option>
                                        <option value="Other">Other</option>
                                        </select>
                                    </div>
                                  </div>
                                        <div class="col-sm-6 col-md-6">
                                          <div class="form-group">
                                            <label>Condition (Required)</label><br>
                                            <input type="radio" name="con" value="New" required>New<br>
                                            <input type="radio" name="con" value="Used" required>Used
                                          </div>
                                        </div>
                                    </div>
                                 </div>
    
                              <div id="9-step1" class="step1">
                                <div class="row">
                                  <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                      <label>Device Type (Required)</label>
                                      <select name="d_type" class="form-control" required>
                                      <option value="">--Select--</option>
                                      <option value="Projector">Projector</option>
                                      <option value="Video Player">Video Player</option>
                                      <option value="Other">Other</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-6">
                                      <div class="form-group">
                                        <label>Condition (Required)</label><br>
                                        <input type="radio" name="con" value="New" required>New<br>
                                        <input type="radio" name="con" value="Used" required>Used
                                      </div>
                                    </div>
                                  </div>
                              </div>
    
                              <div id="10-step1" class="step1">
                                <div class="row">
                                  <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                      <label>Brand (Required)</label>
                                      <select name="brand" class="form-control" required>
                                      <option value="">--Select--</option>
                                      <option value="Haier">Haier</option>
                                      <option value="Innovex">Innovex</option>
                                      <option value="JVC">JVC</option>
                                      <option value="LG">LG</option>
                                      <option value="Panasonic">Panasonic</option>
                                      <option value="Philips">Philips</option>
                                      <option value="Samsung">Samsung</option>
                                      <option value="Sharp">Sharp</option>
                                      <option value="Sony">Sony</option>
                                      <option value="Toshiba">Toshiba</option>
                                      <option value="Other Brand">Other Brand</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                  <label>Condition (Required)</label><br>
                                  <input type="radio" name="con" value="New" required>New<br>
                                  <input type="radio" name="con" value="Used" required>Used
                                </div>
                              </div>
                            </div>
                            </div>

                            <div id="11-step1" class="step1">
                              <div class="row">
                                <div class="col-sm-6 col-md-6">
                                  <div class="form-group">
                                    <label>Device type (Required)</label>
                                    <select name="d_type" class="form-control" required>
                                      <option value="">--Select--</option>
                                      <option value="Digital Camera">Digital Camera</option>
                                      <option value="Camera Accessory">Camera Accessory</option>
                                      <option value="Other">Other</option>
                                      </select>
                                  </div>
                                </div>
                                      <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                      <label>Condition (Required)</label><br>
                                      <input type="radio" name="con" value="New" required>New<br>
                                      <input type="radio" name="con" value="Used" required>Used
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Brand (Required)</label>
                                  <select name="brand" class="form-control" required>
                                  <option value="">--Select--</option>
                                  <option value="Canon">Canon</option>
                                  <option value="Fujifilm">Fujifilm</option>
                                  <option value="Gopro">Gopro</option>
                                  <option value="Kodak">Kodak</option>
                                  <option value="Nikon">Nikon</option>
                                  <option value="Olympus">Olympus</option>
                                  <option value="Panasonic">Panasonic</option>
                                  <option value="Samsung">Samsung</option>
                                  <option value="Sony">Sony</option>
                                  <option value="Toshiba">Toshiba</option>
                                  <option value="Other Brand">Other Brand</option>
                                  </select>
                                </div>
                            </div>

                            <div id="12-step1" class="step1">
                              <div class="row">
                                <div class="col-sm-6 col-md-6">
                                  <div class="form-group">
                                    <label>Device type (Required)</label>
                                    <select name="d_type" class="form-control" required>
                                      <option value="">--Select--</option>
                                      <option value="Head phones">Head phones</option>
                                      <option value="Sound Systems">Sound Systems</option>
                                      <option value="Mp3 Players / Ipods">Mp3 Palyers / Ipods</option>
                                      <option value="Other">Other</option>
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-sm-6 col-md-6">
                                      <div class="form-group">
                                        <label>Condition (Required)</label><br>
                                        <input type="radio" name="con" value="New" required>New<br>
                                        <input type="radio" name="con" value="Used" required>Used
                                      </div>
                                  </div>
                                </div>
                              </div>

                              <div id="13-step1" class="step1">
                                <div class="form-group">
                                  <label>Condition (Required)</label><br>
                                  <input type="radio" name="con" value="New" required>New<br>
                                  <input type="radio" name="con" value="Used" required>Used
                              </div>
                              </div>-->

                              <div class="alert alert-warning mt-3 warning">
                                <p>Dear user, Please select correct district and city which is related to your advertiesement. Once you posted your advertisement you cannot change district and city.</p>
                            </div>

                            <div class="form-group sel-districts">
                                <label>District (Required)</label>
                                <select name="district" id="dist" onchange="myfunction()" class="form-control" required>
                                            <option value="">--select--</option>
                                        <option value="Colombo">Colombo</option>
                                        <option value="Kandy">Kandy</option>
                                        <option value="Galle">Galle</option>
                                        <option value="Ampara">Ampara</option>
                                        <option value="Anuradhapura">Anuradhapura</option>
                                        <option value="Badulla">Badulla</option>
                                        <option value="Batticaloa">Batticaloa</option>
                                        <option value="Gampaha">Gampaha</option>
                                        <option value="Hambantota">Hambantota</option>
                                        <option value="Jaffna">Jaffna</option>
                                        <option value="Kalutara">Kalutara</option>
                                        <option value="Kegalle">Kegalle</option>
                                        <option value="Kilinochchi">Kilinochchi</option>
                                        <option value="Kurunegala">Kurunegala</option>
                                        <option value="Mannar">Mannar</option>
                                        <option value="Matale">Matale</option>
                                        <option value="Matara">Matara</option>
                                        <option value="Moneragala">Moneragala</option>
                                        <option value="Mullativu">Mullativu</option>
                                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                                        <option value="Polonnaruwa">Polonnaruwa</option>
                                        <option value="Puttalam">Puttalam</option>
                                        <option value="Rathnapura">Rathnapura</option>
                                        <option value="Trincomalee">Trincomalee</option>
                                        <option value="Vavuniya">Vavuniya</option>
                                </select>
                            </div>
                            <small id="dist-error" style="color: red;"></small>
                            <div>
                                <a href="#" class="btn btn-outline-primary mt-3" id="nxt">Next</a>
                            </div>
                                
                            </div>
                      
                            
                            <!-- STEP 2 IMAGES START -->
                            <div id="step-2">
                                <!--images start from here-->
                                <h2 class="text-center">Step 2 - Upload Images</h3>
                                <div class="form-group">
                                    <label>Main image (Required)</label>
                                    <div class="custom-file">
                                        <input type="file" accept="image/*" id="main_image" class="custom-file-input" name="mainimg" onchange="return fileValidation1(1)" required>
                                            <label class="custom-file-label" for="customFile"><button class='btn btn-danger btn-sm' id="del_main" onclick="deleteImg(1)">Delete</button></label>
                                    </div><br>
                                    <div class="progress" style="height: 1px;" id="main_img_prog_container">
                                      <div id="main_img_progress" class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div><small id="main-img-error" style="color: red;"></small><br>

                                <div class="form-group">
                                    <label>Image 1 (Optional)</label>
                                        <div class="custom-file">
                                            <input type="file" accept="image/*" id="sub_image_1" class="custom-file-input" name="subimg1" onchange="return fileValidation1(2)" >
                                                  <label class="custom-file-label" for="customFile"><button class='btn btn-danger btn-sm' id="del_sub_1" onclick="deleteImg(2)">Delete</button></label>
                                            </div><br>

                                            <!--progress-->
                                    <div class="progress" id="sub_1_img_prog_container" style="height: 1px;">
                                      <div id="sub_img_progress_1" class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                            <!--progress-->
                                </div><br>
                                
                                <label>Image 2 (Optional)</label>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" accept="image/*" id="sub_image_2" class="custom-file-input" name="subimg2" onchange="return fileValidation1(3)" >
                                            <label class="custom-file-label" for="customFile"><button class='btn btn-danger btn-sm' id="del_sub_2" onclick="deleteImg(3)">Delete</button></label>
                                    </div><br>

                                    <!--progress-->
                                    <div class="progress" id="sub_2_img_prog_container" style="height: 1px;">
                                      <div id="sub_img_progress_2" class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!--progress-->
                                                
                                </div><br>
            
                                <div class="form-group">
                                    <label>Image 3 (Optional)</label>
                                    <div class="custom-file">
                                         <input type="file" accept="image/*" id="sub_image_3" class="custom-file-input" name="subimg3" onchange="return fileValidation1(4)" >
                                            <label class="custom-file-label" for="customFile"><button class='btn btn-danger btn-sm' id="del_sub_3" onclick="deleteImg(4)">Delete</button></label>
                                    </div><br>

                                    <!--progress-->
                                    <div class="progress" id="sub_3_img_prog_container" style="height: 1px;">
                                      <div id="sub_img_progress_3" class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!--progress-->
                                                
                                </div><br>
                                <div class="form-group">
                                    <label>Image 4 (Optional)</label>
                                    <div class="custom-file">
                                        <input type="file" accept="image/*" id="sub_image_4" class="custom-file-input" name="subimg4" onchange="return fileValidation1(5)" >
                                                  <label class="custom-file-label" for="customFile"><button class='btn btn-danger btn-sm' id="del_sub_4" onclick="deleteImg(5)">Delete</button></label>
                                    </div><br>

                                    <!--progress-->
                                    <div class="progress" id="sub_4_img_prog_container" style="height: 1px;">
                                      <div id="sub_img_progress_4" class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <!--progress-->

                                </div>

                                
                                <div style="padding-top: 30px;">
                                    <a href="#" class="btn btn-outline-secondary" id=prev1>Previous</a>
                                    <a href="#" class="btn btn-outline-primary" id="nxt2">Next</a>
                                </div>
                            </div>
                            <!-- images end here -->


                            <!-- STEP 3 STARTS -->
                            <div id="step-3">
                                <h2 class="text-center">Step 3</h3>
                                <div class="alert alert-primary">
                                    <p align="center"><strong>Quick tip : </strong>Do not use any <strong>html</strong> tags and <strong>website urls</strong> for any place in your advertisement.<br>Do not put your phone number in description and title.</p>
                                </div>
                                <div class="form-group">
                                <label>Title (Required)</label>
                                <textarea name="title" rows="2" class="form-control" placeholder="title (maximum 25 characters)" required maxlength="25"></textarea>
                                    </div><small id="title-error" style="color: red;"></small>
                                    <div class="form-group">
                                        <label>Description (Required)</label>
                                        <textarea name="description" rows="5" class="form-control" placeholder="Description (maximum 800 characters)" maxlength="800" required></textarea>
                                    </div><small id="desc-error" style="color: red;"></small>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label>Price (Rs) (Required)</label>
                                        <input type="text" onkeypress="return CheckNumeric()" onkeyup="FormatCurrency(this)" name="price" placeholder="price" class="form-control" maxlength="20" required>
                                    </div><small id="price-error" style="color: red;"></small>
                                </div>
                                <div class="col-sm-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Price Status (Optional)</label><br>
                                        <input type="radio" name="nego" value="Negotiable">Negotiable<br>
                                        <input type="radio" name="nego" value="Fixed Price">Fixed Price
                                    </div><small id="nego-error" style="color: red;"></small>
                                    </div>
                                </div>
                                <!--hidden data start from here-->
                                <input type="hidden" id="image_1" name="image_1" value="">
                                <input type="hidden" id="image_2" name="image_2" value="">
                                <input type="hidden" id="image_3" name="image_3" value="">
                                <input type="hidden" id="image_4" name="image_4" value="">
                                <input type="hidden" id="image_5" name="image_5" value="">
                                <input type="hidden" id="category" name="category" value="<?php echo $_GET['adCategory']; ?>">
                                <!--hidden data end from here-->
                            <div class="rounded border border-success shadow-sm p-3 mb-5 bg-white mx-auto col-md-9">
                                <h4 align="center">Contact numbers</h4>
                                <hr>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        var comments = 86;
                                        $("#contact_loading").show();
                                        $("#load_contact_info").load("<?php echo base_url('/index.php/UserDataProcessor/loadPhoneNumbers'); ?>",{phpcomments : comments},function(){
                                            $("#contact_loading").hide();
                                        });
                                    });
                                </script>
                                <div>
                
                                <div class="progress" id="contact_loading">
                                    <h5 align='center' class='badge'>please wait..</h5>
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                    </div>
                                </div>
                                <div id="load_contact_info">
                
                                </div>
                                
                            </div>
                            <a href="#" class="btn btn-outline-secondary" id="prev2">Previous</a>

                            <div class="mx-auto col-sm-12 col-md-6 text-center">
                                <button class="btn btn-primary" id="btnsubmit" name="btn_sub">Post Ad</button>
                            </div>
                        </div>
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
      </section>




      <script type="text/javascript">

        $(document).ready(function(){
         // $('.step1').hide();
        //  $('.sel-districts').hide();
        //  $('.warning').hide();
         // $('#nxt').hide();
  
              /*$('#cases').change(function () {
                  var value = this.value;
                  $('.step1').hide();
                  $('#' + this.value).show();
                  $('.sel-districts').show();
                  $('.warning').show();
                  $('#nxt').show();
  
              });*/
              $("#main_img_prog_container").hide();$("#sub_1_img_prog_container").hide();$("#sub_2_img_prog_container").hide();$("#sub_3_img_prog_container").hide();$("#sub_4_img_prog_container").hide();

              $("#del_main").hide();$("#del_sub_1").hide();$("#del_sub_2").hide();$("#del_sub_3").hide();$("#del_sub_4").hide();
        });
  
        $(document).ready(function(){
            $('#step-2').hide();
            $('#step-3').hide();
          $("#nxt").click(function(){
            $(".step-1").hide();
            $("#step-2").show();
            $("#pro").css("width","66%");
            $("#pro1").html("Step 2");
          });
  
           $("#prev1").click(function(){
            $("#step-2").hide();
            $(".step-1").show();
            $("#pro").css("width","33%");
            $("#pro1").html("Step 1");
           }); 
  
           $("#nxt2").click(function(){
                $("#step-2").hide();
                $("#step-3").show();
                $("#pro").css("width","100%");
                $("#pro1").html("Last Step");
              });
           
           $("#prev2").click(function(){
            $("#step-3").hide();
            $("#step-2").show();
            $("#pro").css("width","66%");
            $("#pro1").html("Step 1");
           }); 
        });

        $(document).ready(function(){

          $("#btnsubmit").click(function(event){
            event.preventDefault();
            $.ajax({
              url:"<?php echo base_url('/index.php/UserDataProcessor/postAd'); ?>",
              data:$("#meta-data").serialize(),
              type:"POST",
              dataType:"json",
              beforeSend:function(){

                $("#case-error").html(null);$("#dist-error").html(null);$("#main-img-error").html(null);$("#title-error").html(null);$("#desc-error").html(null);$("#price-error").html(null);$("nego-error").html(null);
                
              },success:function(respData){

                if(!respData.success){
                  //form validation error start from here

                  if(respData.cases != ""){
                    $("#case-error").html(respData.cases);
                  }

                  if(respData.district != ""){

                    $("#step-3").hide();$("#step-2").hide();$(".step-1").show();$("#pro").css("width","33%");$("#pro1").html("Step 1");$("#dist-error").html(respData.district);

                  }else if(respData.image_1 != ""){

                     $("#step-3").hide();$(".step-1").hide();$("#step-2").show();$("#pro").css("width","66%");$("#pro1").html("Step 2");$("#main-img-error").html(respData.image_1);

                  }else if(respData.title != "" || respData.desc != "" || respData.price != "" || respData.nego != ""){

                    $("#step-1").hide();$("#step-2").hide();$("#step-3").show();$("#pro").css("width","100%");$("#pro1").html("Last Step");

                    if(respData.title != ""){
                      $("#title-error").html(respData.title);
                    }

                    if(respData.desc != ""){
                      $("#desc-error").html(respData.desc);
                    }

                    if(respData.price != ""){
                      $("#price-error").html(respData.price);
                    }

                    if(respData.nego != ""){
                      $("#nego-error").html(respData.nego);
                    }

                  }

                  //form validation error end form here
                }else{
                  //form validation success start from here
                  window.location.href = "<?php echo base_url('/index.php/user/pendingAds'); ?>";
                  //form validation success end from here
                }

              }

            });
          });

        });
              
      </script>


      <script type="text/javascript">
        
        function fileValidation1(data){

          var form_data = new FormData();
          if(data == 1){
          
            var urlData = "<?php echo base_url('index.php/UserDataProcessor/uploadMainImage'); ?>";
            form_data.append("main_image", elementObj("main_image").files[0]);
          
          }else if( data == 2){

            var urlData = "<?php echo base_url('index.php/UserDataProcessor/uploadsubImage1'); ?>";
            form_data.append("sub_image_1", elementObj("sub_image_1").files[0]);

          }else if(data == 3){

            var urlData = "<?php echo base_url('index.php/UserDataProcessor/uploadsubImage2'); ?>";
            form_data.append("sub_image_2", elementObj("sub_image_2").files[0]);

          }else if(data == 4){

            var urlData = "<?php echo base_url('index.php/UserDataProcessor/uploadsubImage3'); ?>";
            form_data.append("sub_image_3", elementObj("sub_image_3").files[0]);

          }else if(data == 5){

            var urlData = "<?php echo base_url('index.php/UserDataProcessor/uploadsubImage4'); ?>";
            form_data.append("sub_image_4", elementObj("sub_image_4").files[0]);

          }

          
          
         $.ajax({
                url:urlData,
                data:form_data,
                contentType: false,
                cache: false,
                processData: false,
                type:"POST",
                dataType:"json",
                //xmlhttprequest start from here
                beforeSend:function(){
                  
                  if(data == 1){

                    $("#main_img_progress").css("width","0%");
                    $("#main_img_prog_container").show();
                    $("#main_img_progress").css("width","50%");

                  }else if(data == 2){

                    $("#sub_img_progress_1").css("width","0%");
                    $("#sub_1_img_prog_container").show();
                    $("#sub_img_progress_1").css("width","50%");

                  }else if(data == 3){

                    $("#sub_img_progress_2").css("width","0%");
                    $("#sub_2_img_prog_container").show();
                    $("#sub_img_progress_2").css("width","50%");
                    
                  }else if(data == 4){

                    $("#sub_img_progress_3").css("width","0%");
                    $("#sub_3_img_prog_container").show();
                    $("#sub_img_progress_3").css("width","50%");

                  }else if(data == 5){

                    $("#sub_img_progress_4").css("width","0%");
                    $("#sub_4_img_prog_container").show();
                    $("#sub_img_progress_4").css("width","50%");

                  }

                },
                success:function(resdData){

                  if(!resdData.success){

                    alert("Image upload error. Please contact the suppport team");

                  }else{

                    if(!resdData.upload){

                    }else{

                      //upload success start from here
                      if(data == 1){

                        $("#image_1").val(resdData.file);
                        $("#main_img_progress").css("width","100%");
                        $("#del_main").show();$("#main-img-error").html(null);

                      }else if(data == 2){

                        $("#image_2").val(resdData.file);
                        $("#sub_img_progress_1").css("width","100%");
                        $("#del_sub_1").show();

                      }else if(data == 3){

                        $("#image_3").val(resdData.file);
                        $("#sub_img_progress_2").css("width","100%");
                        $("#del_sub_2").show();

                      }else if(data == 4){

                        $("#image_4").val(resdData.file);
                        $("#sub_img_progress_3").css("width","100%");
                        $("#del_sub_3").show();

                      }else if(data == 5){

                        $("#image_5").val(resdData.file);
                        $("#sub_img_progress_4").css("width","100%");
                        $("#del_sub_4").show();
                        
                      }
                      //upload success end form here

                    }

                  }

                }
              });

        }

        function elementObj(id){
          return document.getElementById(id);
        }

        function deleteImg(img){

          if(img == 1){

            $("#main_image").val(null);
            $("#image_1").val(null);
            $("#del_main").hide();
            $("#main_img_prog_container").hide();

          }else if(img == 2){

            $("#sub_image_1").val(null);
            $("#image_2").val(null);
            $("#del_sub_1").hide();
            $("#sub_1_img_prog_container").hide();

          }else if(img == 3){

            $("#sub_image_2").val(null);
            $("#image_3").val(null);
            $("#del_sub_2").hide();
            $("#sub_2_img_prog_container").hide();

          }else if(img == 4){

            $("#sub_image_3").val(null);
            $("#image_4").val(null);
            $("#del_sub_3").hide();
            $("#sub_3_img_prog_container").hide();

          }else if(img == 5){

            $("#sub_image_4").val(null);
            $("#image_5").val(null);
            $("#del_sub_4").hide();
            $("#sub_4_img_prog_container").hide();

          }

        }

      </script>





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
                <li><a href="../../../contactus.html">Contact Us</a></li>
                <li><a href="../../../faq.html">FAQ</a></li>
                <li><a href="../../../helpnsupport.html">How to Sell Fast</a></li>
                <li><a href="../../../staysafe.html">safety policy</a></li>
              </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4 mx-auto">
              <h5 class="text-capitalize">About Us</h5>
              <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
              <ul class="list-inline info-list">
                <li><a href="../../../aboutus.html">Who we are</a></li>
                <li><a href="../../../terms.html">Terms & Conditions</a></li>
                <li><a href="../../../privacypolicy.html">Privacy Policy</a></li>
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