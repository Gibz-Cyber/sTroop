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
     <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-left">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="<?php echo base_url('/assets/images/logo/logo.png'); ?>" alt="logo image" width="60" height="60">&nbsp;&nbsp;&nbsp;SupplyTroopLK
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url('/index.php/admin/clients'); ?>">Clients</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/index.php/admin/activeAds'); ?>">Active Ads</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.html">Update Requests</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/index.php/admin/pendingAds'); ?>">Pending Ads</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/index.php/admin/account'); ?>">Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/index.php/admin/signOut'); ?>">Sign out</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

     <div class="container" style="margin-top: 50px;">
      <!--container start from here-->
      
      <section id="account" class="account-section">
          <div class="container">
            <div class="title mx-auto col-md-8 border border-primary rounded shadow-lg p-3 mb-5 bg-white">
          <h4 class="text-center">Change account name.</h4><br>
          <hr>
      <form method = "post" id="change_name">
        <div class="form-group">
          <label>Your first name</label><br><br>
          <input type="text" name="name" id="name" class="form-control" value="">
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

          <!--add an admin start form here-->

          <h4 align="center">Add an admin.</h4><br>
          <form method="post" id="change_password">
                <div class="form-group">
              <label>First Name</label>
              <input type="text" required name="fname" class="form-control" placeholder="First name of new Admin">
              <small id="a-name-error" style="color: red;"></small>
            </div><br>
            <div class="form-group">
              <label>Last Name<small>(Minimum 8 characters and Maximum 30 characters)</small></label>
              <input type="text" required name="lname" class="form-control" placeholder="Last Name of new Admin">
              <small id="a-lname-error" style="color: red;"></small>
            </div><br>
            <div class="form-group">
              <label>Email</label>
              <input type="email" required name="email" class="form-control" placeholder="New Admin's email" maxlength="30" minlength="8">
              <small id="a-email-error" style="color: red;"></small>
            </div><br>
             <div class="form-group">
              <label>Password<small>(Minimum 8 characters and Maximum 30 characters)</small></label>
              <input type="password" required name="a_pwd" id="a_pwd" class="form-control" placeholder="Password" maxlength="30" minlength="8">
              <small id="a-pwd-error" style="color: red;"></small>
            </div><br>
             <div class="form-group">
              <label>Repeat Password</label>
              <input type="password" required name="a_rpwd" id="a_rpwd" class="form-control" placeholder="Repeat password again" maxlength="30" minlength="8">
              <small id="a-rpwd-error" style="color: red;"></small>
            </div><br>
            <div class="form-group">
              <input type="checkbox" onclick="adminShowPwd()"> Show password
            </div><br>
              <button class="btn btn-outline-primary" id="add_admin">Add Admin <span id="change_password_spinner"class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span class="sr-only">Loading...</span></button>
                <br><br>
          </form> 
          <!--add an admin end from here-->

        </div>
          </div>
      </section>

      <!--container end from here-->
     </div>

      <script type="text/javascript">

        function showPwd(){

          var pwd = document.getElementById("npwd");
          var rpwd = document.getElementById("rpwd");
          var cpwd = document.getElementById("cpwd");

          if(pwd.type == "password"){
            pwd.type = "text";
            rpwd.type = "text";
            cpwd.type = "text";
          }else{
            pwd.type = "password";
            rpwd.type = "password";
            cpwd.type = "password";
          } 

        }
        
        function adminShowPwd(){

          var pwd = document.getElementById("a_pwd");
          var rpwd = document.getElementById("a_rpwd");

          if(pwd.type == "password"){
            pwd.type = "text";
            rpwd.type = "text";
          }else{
            pwd.type = "password";
            rpwd.type = "password";
          }

        }

      </script>
      <script src="<?php echo base_url('/assets/js/bootstrap.bundle.min.js'); ?>"></script>
    </body>
    </html>