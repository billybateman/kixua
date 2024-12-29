<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="keywords" content="<?php echo SITE_NAME; ?>" />
   <meta name="description" content="<?php echo SITE_NAME; ?>" />
   <meta name="author" content="kixua" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title><?php echo SITE_NAME; ?></title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="/assets/images/favicon.png">
   <!-- CSS bootstrap-->
   <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
   <!--  Style -->
   <link rel="stylesheet" href="/assets/css/style.css" />
   <!--  Responsive -->
   <link rel="stylesheet" href="/assets/css/responsive.css" />

   <script src="/assets/js/jquery.min.js"></script>
</head>

<body>

   <!--=========== Loader =============-->
   <div id="gen-loading">
      <div id="gen-loading-center">
         <img src="<?php echo SITE_LOGO; ?>" alt="loading">
      </div>
   </div>
   <!--=========== Loader =============-->

   <!--========== Header ==============-->
   <header id="gen-header" class="gen-header-style-1 gen-has-sticky">
      <div class="gen-bottom-header">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <a class="navbar-brand" href="/">
                        <img class="img-fluid logo" src="<?php echo SITE_LOGO; ?>" alt="kixua-image">
                     </a>
                    
                     <div class="gen-header-info-box">
                       
                        
                        <?php
                        if(!isset($user)){
                        ?>
                        <div class="gen-btn-container">
                           <a href="/login" class="gen-button">
                              <div class="gen-button-block">
                                 <span class="gen-button-line-left"></span>
                                 <span class="gen-button-text">Login</span>
                              </div>
                           </a>
                        </div>
                        <?php } else { ?>
                            <?php

                                 $profile_image = "";
                                 if(isset($user['images_file'])){
                                    $profile_image = $user['images_file'];
                                 }
                                 ?>
                                 <div class="gen-account-holder">
                                    <a href="javascript:void(0)" id="gen-users_btn">
                                    <?php
                                    if($profile_image != ""){ 
                                    ?><img class="rounded-circle header-profile-user" src="<?php echo $profile_image; ?>"
                                    alt="Header Avatar">
                                    <?php } else { ?>
                                       <i class="fa fa-user"></i>
                                    <?php } ?>
                                    </a>
                                    <div class="gen-account-menu">
                                       <ul class="gen-account-menu">
                                          <!-- Library Menu -->
                                          <?php
                                          if($user['users_types_id'] == 1 || $user['users_types_id'] == 2){
                                             ?>
                                             <li>
                                             <a href="/admin">
                                                <i class="fa fa-plus"></i>
                                                Admin </a>
                                          </li>
                                             <?php
                                          }
                                          ?>
                                          <li>
                                             <a href="/profile">
                                                <i class="fa fa-indent"></i>
                                                Profile </a>
                                          </li>
                                          <li class="d-none">
                                             <a href="/favorites">
                                                <i class="fa fa-star"></i>
                                                My Favorites </a>
                                          </li>
                                          
                                          <li>
                                             <a href="/logout"> <i class="fa fa-close"></i>
                                                Logout </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                        
                        <?php } ?>
                     </div>
                     <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                     </button>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!--========== Header ==============-->