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
                <img src="<?php echo base_url('/assets/images/logo/logo.png'); ?>" alt="logo image" width="60" height="60">&nbsp;&nbsp;&nbsp;SupplyTroopLK : ADMIN
                
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
          <form method="post" id="add_admin_form">
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
            <div class="alert alert-danger" id="admin-warning"><p>Oops! something went wrong! please try again later.</p></div>
              <button class="btn btn-outline-primary" id="add_admin">Add Admin <span id="add_admin_spinner"class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
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

        $(document).ready(function(){

          $("#add_admin_spinner").hide();$("#admin-warning").hide();$("#change_password_spinner").hide();

          $("#add_admin").click(function(event){
            event.preventDefault();

            var btn = document.getElementById("add_admin");

            $.ajax({

              url:"<?php echo base_url('/index.php/AdminDataProcessor/addAdmin'); ?>",
              data:$("#add_admin_form").serialize(),
              dataType:"json",
              type:"POST",
              beforeSend:function(){

                $("#a-name-error").html(null);$("#a-lname-error").html(null);$("#a-email-error").html(null);$("#a-pwd-error").html(null);$("#a-rpwd-error").html(null);

              },success:function(respData){

                btn.disabled = false;
                $("#add_admin_spinner").hide();

                if(!respData.success){
                  //form validation error start from here

                  if(respData.fname != ""){
                    $("#a-name-error").html(respData.fname);
                  }

                  if(respData.lname != ""){
                    $("#a-lname-error").html(respData.lname);
                  }

                  if(respData.email != ""){
                    $("#a-email-error").html(respData.email);
                  }

                  if(respData.a_pwd != ""){
                    $("#a-pwd-error").html(respData.a_pwd);
                  }

                  if(respData.a_rpwd != ""){
                    $("#a-rpwd-error").html(respData.a_rpwd);
                  }

                  //form validation error end from heer
                }else{
                  //form validation success start from here

                  if(!respData.avail){
                    $("#admin-warning").show()
                  }else{

                    if(!respData.added){
                      $("#admin-warning").show();
                    }else{ 

                      alert("New addmin assigned successfully!");
                      window.location.href=document.URL;

                    }

                  }

                  //form validation success end from here
                }

              }

            });

          });

          $("#c_pwd").click(function(event){
            event.preventDefault();

            $.ajax({
              url:"<?php echo base_url('/index.php/AdminDataProcessor/changePassword'); ?>",
              data:$("#change_password").serialize(),
              dataType:"json",
              type:"POST",
              beforeSend:function(){

                $("#current_pwd_error").html(null);$("#new_pwd_error").html(null);$("#repeat_pwd_error").html(null);

              },success:function(respData){

                if(!respData.success){
                  //validation errro start from here

                  if(respData.cpwd != ""){
                    $("#current_pwd_error").html(respData.cpwd);
                  }

                  if(respData.npwd != ""){
                    $("#new_pwd_error").html(respData.npwd);
                  }

                  if(respData.rpwd != ""){
                    $("#repeat_pwd_error").html(respData.rpwd);
                  }

                  //validation error end from here
                }else{
                  //validation success start from here

                  if(!respData.current){
                    //current password error start form here
                    alert("Entered current password is incorrect. Please enter your valid current password");
                    //current password error end from here
                  }else{ 
                    //current password succes start from here

                    if(!respData.update){
                      //update error start from here
                      alert("Update error! Please try again later");
                      //update error end form gere
                    }else{
                      //update success start from here
                      alert("Updated successfully!");
                      window.location.href=document.URL;
                      //update error end form here
                    }

                    //current password success end from here
                  }

                  //validation success end from here
                }

              }
            });

          });

        });

      </script>
      <script src="<?php echo base_url('/assets/js/bootstrap.bundle.min.js'); ?>"></script>
    </body>
    </html>