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
                <a class="nav-link" href="">Pending Ads</a>
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

     <div class="container" style="margin-top: 100px;">
      <!--container start from here-->
      <h4 align="center">Pending Ads</h4>
      <?php

      if($result === false){
        //no ads available start from here
        echo "<div class='alert alert-danger'><p align='center'>No pending ads available at this moment!</p></div>";
        //no ads available end form here
      }else{
        //ads available start from here

          ?>


          <table class="table">
            <thead>
              <tr>
                <th scope="col">Ad id</th>
                <th scope="col">Main Category</th>
                <th scope="col">Title</th>
              </tr>
            </thead>
            <tbody>
              <?php

              foreach($result as $individualAd){

              ?>

              <tr>
                <th scope="row"><?php echo $individualAd->ad_id; ?></th>
                <td><?php echo $individualAd->main_category; ?></td>
                <td><?php echo $individualAd->title; ?></td>
                <td><button class='btn btn-warning btn-sm'>View</button></td>
                <td><button class='btn btn-success btn-sm' onclick="changeStatus(1,'<?php echo $individualAd->ad_id; ?>' )">Active</button></td>
                <td><button class='btn btn-danger btn-sm' onclick="changeStatus(0,'<?php echo $individualAd->ad_id; ?>' )">Delete</button></td>
              </tr>

              <?php

              }

              ?>
            </tbody>
          </table>

          <?php

        //ads available end from here
      }


      ?>


      <!--container end from here-->
     </div>

     <script type="text/javascript">
       
       function changeStatus(type,id){

        $(document).ready(function(){
          
          $.ajax({
            url:"<?php echo base_url('/index.php/AdminDataProcessor/adStatus'); ?>",
            data:{type:type,id:id},
            dataType:"json",
            type:"POST",
            beforeSend:function(){

            },success:function(respData){

              if(!respData.success){

                alert("Please refresh the page and try again");

              }else{

                if(!respData.update){
                  //update error start from here
                  alert("Oops! something went wrong. Please try again later");
                  //update error end from here
                }else{
                  //update success start from here
                  window.location.href=document.URL;
                  //update success end from here
                }

              }

            }
          });

        });

       }

     </script>


      <script src="<?php echo base_url('/assets/js/bootstrap.bundle.min.js'); ?>"></script>
    </body>
    </html>