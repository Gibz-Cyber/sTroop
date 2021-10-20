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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
      
    </script>
</head>
<body>

     <!-- START THE NAVBAR -->
     <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../index.php">
                <img src="../assets/images/logo/logo.png" alt="logo image" width="60" height="60">&nbsp;&nbsp;&nbsp;SupplyTroopLK
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              
             <!--  <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li> -->
              <li class="nav-item">
                  <a href="<?php echo base_url('/index.php/user/activeAds'); ?>" class="nav-link">My Ads<sup id="count" class="badge badge-danger"></sup>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">My Account</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url('/index.php/user/signOut'); ?>">Sign Out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- start the account section -->
      <section id="account" class="account-section">
          <div class="container">
            <div class="title mx-auto col-md-8 border border-primary rounded shadow-lg p-3 mb-5 bg-white">
			    <h4 class="text-center">Change account name.</h4><br>
			    <hr>
			<form method = "post" id="change_name">
				<div class="form-group">
					<label>Your first name</label><br><br>
					<input type="text" name="name" id="name" class="form-control" value="<?php echo $this->session->userdata('user_name'); ?>">
          <small id="name_error" style="color: red;"></small>
				</div><br>

				    <input type="hidden" name="type" value="86">
				    <button type="submit" class="btn btn-outline-primary" id="c_name">Change Name <span id="change_name_spinner"class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span class="sr-only">Loading...</span></button>
				    <br><br>
            </form>

			<hr>
			    <h4 align="center">Change account password.</h4><br>
			    <form method="post" id="change_password">
				        <div class="form-group">
							<label>Current Password</label>
							<input type="password" required name="cpwd" id="cpwd" class="form-control" placeholder="Current password" maxlength="30">
              <small id="current_pwd_error" style="color: red;"></small>
						</div><br>
						<div class="form-group">
							<label>New Password <small>(Minimum 8 characters and Maximum 30 characters)</small></label>
							<input type="password" required name="npwd" id="npwd" class="form-control" placeholder="New password" maxlength="30" minlength="8">
              <small id="new_pwd_error" style="color: red;"></small>
						</div><br>
						<div class="form-group">
							<label>Repeat your new password <small>(Minimum 8 characters and Maximum 30 characters)</small></label>
							<input type="password" required name="rpwd" id="rpwd" class="form-control" placeholder="Repeat your new password" maxlength="30" minlength="8">
              <small id="repeat_pwd_error" style="color: red;"></small>
						</div><br>
						<div class="form-group">
							<input type="checkbox" onclick="showPwd()"> Show password
						</div><br>
							<button class="btn btn-outline-primary" id="c_pwd">Change password <span id="change_password_spinner"class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span class="sr-only">Loading...</span></button>
						    <br><br>
			    </form> 
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
                <img src="../assets/images/logo/logo.png"  alt="logo" width="50" height="50">
              </div>
              <hr class="bg-white d-inline-block mb-4" style="width: 120px; height: 2px;">
            </div>
            
            <div class="col-12 col-md-6 col-lg-3 mb-4 mx-auto">
              <h5 class="text-capitalize">Help & Support</h5>
              <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
              <ul class="list-inline info-list">
                <li><a href="../contactus.php">Contact Us</a></li>
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
      <div id="snackbar"></div>
    <script src="<?php echo base_url('/assets/js/bootstrap.bundle.min.js'); ?>"></script>

    <script type="text/javascript">

      function showPwd(){

        var cPwd = document.getElementById("cpwd");
        var nPwd = document.getElementById("npwd");
        var rPwd = document.getElementById("rpwd");

        if(cPwd.type == "text"){
          cPwd.type = "password";
          nPwd.type = "password";
          rPwd.type = "password";
        }else{
          cPwd.type = "text";
          nPwd.type = "text";
          rPwd.type = "text";
        }

      }
      
      $(document).ready(function(){

        $("#change_name_spinner").hide();$("#change_password_spinner").hide();

        $("#c_pwd").click(function(event){
          event.preventDefault();
          var btn = document.getElementById("c_pwd");
          $.ajax({
            url:"<?php echo base_url('/index.php/UserDataProcessor/changePassword'); ?>",
            data:$("#change_password").serialize(),
            type:"post",
            dataType:"json",
            beforeSend:function(){

              $("#current_pwd_error").html(null);$("#new_pwd_error").html(null);$("#repeat_pwd_error").html(null);
              $("#change_password_spinner").show(); btn.disabled = true;

            },success:function(pwdChangeRes){
              $("#change_password_spinner").hide(); btn.disabled = false;
              if(!pwdChangeRes.success){
                //form validation error start from here

                if(pwdChangeRes.cpwd != ""){
                  $("#current_pwd_error").html(pwdChangeRes.cpwd);
                }

                if(pwdChangeRes.npwd != ""){
                  $("#new_pwd_error").html(pwdChangeRes.npwd);
                }

                if(pwdChangeRes.rpwd != ""){
                  $("#repeat_pwd_error").html(pwdChangeRes.rpwd);
                }

                //form validation error end from here
              }else{
                //form validation success start from here

                var x = document.getElementById("snackbar");

                if(!pwdChangeRes.old){
                  //old pwd error start from here
                  x.style.backgroundColor="#FF0000";
                  x.innerHTML = "Oops! entered current password is invalid. Please enter your valid current password";
                  //old pwd error end from here
                }else{
                  //old pwd success start from here

                    if(!pwdChangeRes.update){
                      //update error start from here
                      x.style.backgroundColor="#FF0000";
                      x.innerHTML = "Password update failed! Don't use your current password as your new password!";
                      //update error end from here
                    }else{
                      //update success start from here
                       x.style.backgroundColor="#5cb85c";
                       x.innerHTML = "Password updated successfully!";
                       $("#cpwd").val(null);$("#npwd").val(null);$("#rpwd").val(null);
                      //update success end from here
                    }

                  //old pwd success end from here
                }

                x.className = "show";
                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

                //form validation success end from here
              }

            }
          });

                      /*var x = document.getElementById("snackbar");
                      x.style.backgroundColor="#5cb85c";
                      x.className = "show";
                      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);*/
        });

        $("#c_name").click(function(event){
          event.preventDefault();
          var btn = document.getElementById("c_name");
          $.ajax({
            url:"<?php echo base_url('/index.php/UserDataProcessor/changeName'); ?>",
            data:$("#change_name").serialize(),
            dataType:"json",
            type:"post",
            beforeSend:function(){

              $("#name_error").html(null);$("#change_name_spinner").show();btn.disabled = true;

            },success:function(changeNameRes){

              $("#change_name_spinner").hide();btn.disabled = false;

              if(!changeNameRes.success){
                //form validation error start from here
                if(changeNameRes.name != ""){
                  $("#name_error").html(changeNameRes.name);
                }
                //form validation error end from here
              }else{
                //form validation success start from here
                var x = document.getElementById("snackbar");
                if(!changeNameRes.update){
                  x.style.backgroundColor="#FF0000";
                  x.innerHTML = "If you want to update your name, Please change your name";
                }else{
                   x.style.backgroundColor="#5cb85c";
                   x.innerHTML = "Name updated successfully!";
                }

                 x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                //form validation success end from here
              }

            }
          });
        });

      });

    </script>

</body>
</html>