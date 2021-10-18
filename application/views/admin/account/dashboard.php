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
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-signup">Active Ads</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.html">Update Requests</a>
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
      <?php

      /*  if($this->session->flashdata("welcome_msg"){

          echo $this->session->flashdata("welcome_msg");

        } */

      ?>

      <table class="table">
            <thead>
              <tr>
                <th scope="col">Users</th>
                <th scope="col">Admins</th>
                <th scope="col">Pending Ads</th>
                <th scope="col">Active Ads</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"><?php echo $user; ?></th>
                <td><?php echo $admin; ?></td>
                <td><?php echo $pendingAds; ?></td>
                <td><?php echo $activeAds; ?></td>
              </tr>
            </tbody>
          </table>

      <!--container end from here-->
     </div>


      <script src="<?php echo base_url('/assets/js/bootstrap.bundle.min.js'); ?>"></script>
    </body>
    </html>