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
          <form class="form-horizontal signup-form p-3" id="signup_form">
            <div class="mb-3 ">
              <label for="firstname" class="form-label">First Name</label>
              <input type="text" name="signup_first_name" class="form-control" id="firstname" placeholder="Enter your fitst name">
              <small style="color: red;" id="signup_fname_error"></small>
            </div>
            <div class="mb-3">
              <label for="lastname" class="form-label">Last Name</label>
              <input type="text" name="signup_second_name" class="form-control" id="lastname" placeholder="Enter your last name">
              <small style="color: red;" id="signup_lname_error"></small>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="signup_email" class="form-control" id="email" placeholder="Enter your email address">
              <small style="color: red;" id="signup_email_error"></small>
            </div>

            <div class="mb-3">
              <label for="Password" class="form-label">Password</label>
              <input type="password" name="signup_password" id="signup_password" class="form-control" aria-describedby="passwordHelpBlock">
              <small style="color: red;" id="signup_pass_error"></small>
              <div id="passwordHelpBlock" class="form-text">
                Your password must be 8-30 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
              </div>
            </div>
            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Repeat Password</label>
              <input type="password" name="signup_confirm_pass" id="signup_confirm_pass" class="form-control" aria-describedby="passwordHelpBlock">
              <small style="color: red;" id="signup_cpass_error"></small>
            </div>
            <div class="form-check form-switch">
              <input class="form-check-input" onclick="signup_pwd()" type="checkbox" id="flexSwitchCheckDefault">
              <label class="form-check-label" for="flexSwitchCheckDefault">Show Password</label>
            </div>
            <!--warning msg start from here-->
            <div class="alert alert-danger" id="signup_warning_container">
              <p id="signup_warning-msg" class="d-flex justify-content-center"></p>
            </div>
            <!--warning message end from here-->
            <div class="submit-btn mt-4 align-items-center">
              <button type="submit" class="rounded-pill" id="signup_btn" value="#">Sign up <span id="signup_spinner" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span class="sr-only">Loading...</span></button>
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
          <form class="form-horizontal signup-form p-3" id="login_form">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="login_email">
              <small id="login_email_error" style="color: red"></small>
            </div>

            <div class="mb-3">
              <label for="Password" class="form-label">Password</label>
              <input type="password" name="login_password" id="login_password" class="form-control" aria-describedby="passwordHelpBlock">
              <small id="login_pwd_error" style="color: red"></small>
            </div>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onclick="loginShowPwd()">
              <label class="form-check-label" id="login_show_pwd" for="flexSwitchCheckDefault">Show Password</label>
            </div>
            <!--warning msg start from here-->
            <div class="alert alert-danger" id="login_warning_container">
              <p id="login_error_msg" class="d-flex justify-content-center"></p>
            </div>
            <!--warning msg end from here-->
            <div class="submit-btn mt-4 align-items-center">
              <a href="advertise/postad.html"><button type="button" class="rounded-pill" id="login_btn" value="#">Log in <span id="login_spinner" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  <span class="sr-only">Loading...</span></button></a>
            </div>
          </form>
          <div class="redirect-signup p-3">
            <p>Don't have an account yet? <span><a href="javascript: OpenSignup();" data-bs-toggle="modal" data-bs-target="#modal-signup" data-bs-dismiss="modal">Click here</a></span></p>
          </div>
        </div>
        <div class="modal-footer justify-content-center">
          <img src="<?php echo base_url('/assets/images/logo/logo_black.jpg'); ?>" alt="logo image" width="60" height="60">&nbsp;&nbsp;&nbsp;&copy;SupplyTroopLK
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function loginShowPwd() {

      var type = document.getElementById("login_password");

      if (type.type == "text") {
        type.type = "password";
      } else {
        type.type = "text";
      }

    }
    $(document).ready(function(){
      $("#login_spinner").hide();
      $("#signup_spinner").hide();
      $("#login_warning_container").hide();
      $("#signup_warning_container").hide();
      //login start from here
      $("#login_btn").click(function(event) {
        event.preventDefault();
        var btn = document.getElementById("login_btn");

        $.ajax({
          url: "<?php echo base_url('/index.php/UserIdentification/login'); ?>",
          data: $("#login_form").serialize(),
          dataType: "json",
          type: "post",
          beforeSend: function() {
            $("#login_spinner").show();
            $("#login_email_error").html(null);
            $("#login_pwd_error").html(null);
            $("#login_warning_container").hide();
            $("#login_error_msg").html(null);
            btn.disabled = true;
          },
          success: function(loginRespData) {
            btn.disabled = false;
            $("#login_spinner").hide();
            if (!loginRespData.success) {
              //form validation error start from here
              if (loginRespData.email != "") {
                $("#login_email_error").html(loginRespData.email);
              }

              if (loginRespData.pwd != "") {
                $("#login_pwd_error").html(loginRespData.pwd);
              }
              //form validation error end from here
            } else {
              //form validation success start from here

              if (!loginRespData.user) {
                //user not registered start from here
                $("#login_error_msg").html("Oops! No records found. Please check email and password again");
                $("#login_warning_container").show();
                //user not registered end from here
              } else {
                //user registered start from here

                if (loginRespData.ban) {
                  //user account banned start from here
                  $("#login_error_msg").html("Your account has been banned! Please contact us for get support!");
                  $("login_warning_container").show();
                  //user account banned end from here
                } else {
                  //active user account start from here

                  if (loginRespData.login) {
                    //login process success start from here
                    btn.disabled = true;
                    $("#login_spinner").show();
                    window.location.href = "<?php echo base_url('/index.php/user/postAd'); ?>"
                    //login process success end from here
                  }

                  //active user account end from here
                }

                //user registered end from here
              }

              //form validation error end from here
            }

          }
        });

      });
    });
  </script>