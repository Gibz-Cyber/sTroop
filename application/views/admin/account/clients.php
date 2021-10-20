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
            <a class="navbar-brand" href="<?php echo base_url('/index.php/admin/dashboard'); ?>">
                <img src="<?php echo base_url('/assets/images/logo/logo.png'); ?>" alt="logo image" width="60" height="60">&nbsp;&nbsp;&nbsp;SupplyTroopLK : ADMIN
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url('/index.php/admin/dashboard'); ?>">Home</a>
              </li> -->
             <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url('/index.php/admin/clients'); ?>">Clients</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/index.php/admin/activeAds'); ?>">Active Ads</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/index.php/admin/pendingAds'); ?>">Pending Ads</a>
              </li> -->
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

     <div class="container" style="margin-top: 100px;">
      <!--container start from here-->
            <h4 class="display-4--title" align="center">Supplytroop Users</h4>
            
       <?php

          if($result === false){
            //users not available start from here
            echo "<div class='alert alert-primary'><p align='center'>No users available at this moment.</p></div>";
            //users not available end from here
          }else{ 
            //users available start from here
            ?>
             <table class="table">
            <thead>
              <tr>
                <th scope="col">User ID</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">User Status</th>
              </tr>
            </thead>
            <tbody>
              <?php

                foreach($result as $eachUser){
                  ?>

                  <tr>
                    <th scope="row"><?php echo $eachUser->user_id; ?></th>
                    <td><?php echo $eachUser->first_name; ?></td>
                    <td><?php echo $eachUser->user_email; ?></td>
                    <td><?php
                        if($eachUser-> user_status != 1){
                          echo "Banned";
                        }else{
                          echo "Active";
                        }
                      ?>
                      </td>
                    <td>
                      <?php

                        if($eachUser->user_status != 1){
                        echo "<button class='btn btn-sm btn-success' onclick='active({$eachUser->user_id},1)'>Active</button>";
                        }else{
                        echo "<button class='btn btn-sm btn-danger' onclick='active({$eachUser->user_id},0)'>Ban</button>";
                        }


                      ?>
                    </td>
                  </tr>

                  <?php
                }

              ?>
              </tbody>
            </table> 
            <?php
            //users available end from here
        }


       ?>     

      <!--container end from here-->
     </div>

     <script type="text/javascript">
       
       function active(userId,placeHolder){

        $.ajax({

          url:"<?php echo base_url('/index.php/AdminDataProcessor/userStatus'); ?>",
          data:{userId:userId,type:placeHolder},
          dataType:"json",
          type:"POST",
          beforeSend:function(){

          },success:function(respData){

            if(!respData.success){
              alert("Please refresh the page and try again");
            }else{

              if(!respData.update){

                alert("Oops! something went wrong! please try again later");

              }else{

                window.location.href=document.URL;

              }

            }

          }
        });

       }


     </script>


      <script src="<?php echo base_url('/assets/js/bootstrap.bundle.min.js'); ?>"></script>
    </body>
    </html>