<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title><?php echo SITE_NAME; ?> - Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Pichforest" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="/assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

		<script src="https://kit.fontawesome.com/a018a2caf7.js" crossorigin="anonymous"></script>

        <script src="/assets/admin/js/jquery-2.1.1.js"></script>
  </head>

    
    <body data-sidebar="dark" data-sidebar-size="sm" class="sidebar-enable">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        
                        <div class="navbar-brand-box">
                            <a href="/admin" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?php echo SITE_LOGO; ?>" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo SITE_LOGO; ?>" alt="" height="22">
                                </span>
                            </a>

                            <a href="/admin" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?php echo SITE_LOGO; ?>" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo SITE_LOGO; ?>" alt="" height="22">
                                </span>
                            </a>
                        </div>

                        

                       
                       
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block d-none">
                            <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="icon-sm" data-feather="search"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                                <form class="p-2">
                                    <div class="search-box">
                                        <div class="position-relative">
                                            <input type="text" class="form-control rounded bg-light border-0"
                                                placeholder="Search...">
                                            <i class="mdi mdi-magnify search-icon"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                       

                        <div class="dropdown d-inline-bloc d-none">
                            <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-sm" data-feather="bell"></i>
                                <span class="noti-dot bg-danger"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-15"> Notifications </h5>
                                        </div>
                                        <div class="col-auto">
                                            <a href="pages-starter.html#!" class="small"> Mark all as read</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 250px;">
                                    <h6 class="dropdown-header bg-light">New</h6>
                                    <a href="pages-starter.html" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <img src="/assets/admin/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-sm"
                                                    alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Justin Verduzco</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Your task changed an issue from "In Progress" to
                                                        <span class="badge badge-soft-success">Review</span>
                                                    </p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                            class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="pages-starter.html" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-3">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="uil-shopping-basket"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">New order has been placed</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Open the order confirmation or shipment confirmation.</p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                            class="mdi mdi-clock-outline"></i> 5 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <h6 class="dropdown-header bg-light">Earlier</h6>
                                    <a href="pages-starter.html" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-3">
                                                    <span
                                                        class="avatar-title bg-soft-success text-success rounded-circle font-size-16">
                                                        <i class="uil-truck"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Here is somthing that you might light like to know.
                                                    </p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                            class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="pages-starter.html" class="text-reset notification-item">
                                        <div class="d-flex border-bottom align-items-start">
                                            <div class="flex-shrink-0">
                                                <img src="/assets/admin/images/users/avatar-4.jpg" class="me-3 rounded-circle avatar-sm"
                                                    alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="text-muted">
                                                    <p class="mb-1 font-size-13">Yay ! Everything worked!</p>
                                                    <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                            class="mdi mdi-clock-outline"></i> 3 days ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                        <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block d-none">
                            <button type="button" class="btn header-item noti-icon bell-link" id="chat-toggle">
                            <i class="far fa-comment-alt icon-sm"></i>
                            </button>
                        </div>

						<?php
							$profile_image = "/assets/admin/images/profile/17.jpg";
							if(isset($user['images_file'])){
								$profile_image = $user['images_file'];
							}
						?>
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item user text-start d-flex align-items-center"
                                id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?php echo $profile_image; ?>"
                                    alt="Header Avatar">
                                <span class="ms-2 d-none d-sm-block user-item-desc">
                                    <span class="user-name"><?php echo $user['users_first_name']; ?> <?php echo $user['users_last_name']; ?></span>
                                    <span class="user-sub-title"><?php echo $user['users_types_name']; ?></span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                
                                <a class="content-loader dropdown-item" href="/admin/users/profile"><i
                                        class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span
                                        class="align-middle">Profile</span></a>
                                <!--<a class="dropdown-item" href="apps-chat.html"><i
                                        class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i> <span
                                        class="align-middle">Messages</span></a>
                                <a class="dropdown-item" href="index.html"><i
                                        class="mdi mdi-calendar-check-outline text-muted font-size-16 align-middle me-1"></i> <span
                                        class="align-middle">Taskboard</span></a>
                                <a class="dropdown-item" href="user-profile.html"><i
                                        class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span
                                        class="align-middle">Help</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="user-profile.html"><i
                                        class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span
                                        class="align-middle">Balance : <b>$6951.02</b></span></a>
                                <a class="dropdown-item d-flex align-items-center" href="project-file-manager.html"><i
                                        class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span
                                        class="align-middle">Settings</span><span
                                        class="badge badge-soft-success ms-auto">New</span></a>
                                <a class="dropdown-item" href="javascript: void(0);"><i
                                        class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span
                                        class="align-middle">Lock screen</span></a>-->
                                <a class="dropdown-item" href="/logout"><i
                                        class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span
                                        class="align-middle">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

        

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
						<ul class="metismenu list-unstyled" id="side-menu">
							
							
                            <li>
                                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                    <i class="fa fa-user"></i> 
                                    <span class="nav-text">Users </span>
                                </a>
                                <ul aria-expanded="false">
                                    <li><a class="content-loader" href="/admin/users/create">Create</a></li>
                                    <li><a class="content-loader" href="/admin/users">Browse</a></li>
                                    <li><a class="content-loader" href="/admin/users_types">Roles</a></li>
                                </ul>
                            </li>
							
						</ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                   