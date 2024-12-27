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

                        <div class="dropdown d-inline-block">
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
<!--
                    <li class="menu-title" data-key="t-dashboard">Dashboard &amp; Analytics</li>
                    <li>
                        <a class="content-loader" href="/admin/dashboard">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home icon nav-icon"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="content-loader" href="/admin/analytics">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart icon nav-icon"><line x1="12" y1="20" x2="12" y2="10"></line><line x1="18" y1="20" x2="18" y2="4"></line><line x1="6" y1="20" x2="6" y2="16"></line></svg>
                            <span class="menu-item" data-key="t-analytics">Analytics Overview</span>
                        </a>
                    </li>
                    <li>
                        <a class="content-loader" href="/admin/reports">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text icon nav-icon"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                            <span class="menu-item" data-key="t-reports">Reports</span>
                        </a>
                    </li>
                    <li>
                        <a class="content-loader" href="/admin/stats">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity icon nav-icon"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                            <span class="menu-item" data-key="t-stats">Real-time Statistics</span>
                        </a>
                    </li>
                        -->
                
                    <li class="menu-title" data-key="t-user-management">User Management</li>
                    <li>
                        <a class="content-loader" href="/admin/users">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users icon nav-icon"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span class="menu-item" data-key="t-users">Users</span>
                        </a>
                    </li>
                    <li>
                        <a class="content-loader" href="/admin/roles">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield icon nav-icon"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            <span class="menu-item" data-key="t-roles">Roles &amp; Permissions</span>
                        </a>
                    </li>
                    <li>
                        <a class="content-loader" href="/admin/logs/users">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard icon nav-icon"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                            <span class="menu-item" data-key="t-user-logs">User Activity Logs</span>
                        </a>
                    </li>
                    <li>
                        <a class="content-loader" href="/admin/settings/profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user icon nav-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            <span class="menu-item" data-key="t-profile-settings">Profile Settings</span>
                        </a>
                    </li>

                    <li class="menu-title" data-key="t-applications">Applications</li>

                    <li>
                        <a class="content-loader" href="javascript: void(0);" class="has-arrow">
                            <i class="icon nav-icon" data-feather="users"></i>
                            <span class="menu-item" data-key="t-tasks">Tasks</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a class="content-loader" href="http://localhost:8888/assets/admin/dashboard.html" data-key="t-kanban">Kanban Board</a></li>
                            <li><a class="content-loader" href="http://localhost:8888/assets/admin/team-projects.html" data-key="t-projects">Projects</a></li>
                            <li><a class="content-loader" href="http://localhost:8888/assets/admin/team-employee.html" data-key="t-employee">Employee</a></li>
                            <li><a class="content-loader" href="http://localhost:8888/assets/admin/project-tasks-list.html" data-key="t-task-list">Task List</a></li>
                            <li><a class="content-loader" href="http://localhost:8888/assets/admin/project-activity.html" data-key="t-activity">Activity</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="content-loader" href="http://localhost:8888/assets/admin/apps-chat.html">
                            <i class="icon nav-icon" data-feather="message-square"></i>
                            <span class="menu-item" data-key="t-chat">Chat</span>
                        </a>
                    </li>

                    <li>
                        <a class="content-loader" href="http://localhost:8888/assets/admin/billing.html">
                            <i class="icon nav-icon" data-feather="credit-card"></i>
                            <span class="menu-item" data-key="t-billing">Billing</span>
                        </a>
                    </li>

                    <li>
                        <a class="content-loader" href="http://localhost:8888/assets/admin/messages.html">
                            <i class="icon nav-icon" data-feather="mail"></i>
                            <span class="menu-item" data-key="t-messages">Messages</span>
                        </a>
                    </li>

                    <li>
                        <a class="content-loader" href="http://localhost:8888/assets/admin/contracts.html">
                            <i class="icon nav-icon" data-feather="file-text"></i>
                            <span class="menu-item" data-key="t-contracts">Contracts</span>
                        </a>
                    </li>

                    <li>
                        <a class="content-loader" href="javascript: void(0);" class="has-arrow">
                            <i class="icon nav-icon" data-feather="folder"></i>
                            <span class="menu-item" data-key="t-files">Files</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a class="content-loader" href="/admin/system/files/" data-key="t-file-manager">File Manager</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="content-loader" href="http://localhost:8888/assets/admin/forms.html">
                            <i class="icon nav-icon" data-feather="edit"></i>
                            <span class="menu-item" data-key="t-forms">Forms</span>
                        </a>
                    </li>

                    <li>
                        <a class="content-loader" href="http://localhost:8888/assets/admin/helpdesk.html">
                            <i class="icon nav-icon" data-feather="help-circle"></i>
                            <span class="menu-item" data-key="t-helpdesk">Helpdesk</span>
                        </a>
                    </li>
                
                    <li class="menu-title" data-key="t-system-management">System Management</li>
                    <li>
                        <a class="content-loader" href="/admin/system/backup">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive icon nav-icon"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg>
                            <span class="menu-item" data-key="t-backup">Backup &amp; Restore</span>
                        </a>
                    </li>
                    <li>
                        <a class="content-loader" href="/admin/system/status">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server icon nav-icon"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
                            <span class="menu-item" data-key="t-server-status">Server Status</span>
                        </a>
                    </li>
                    <li>
                        <a class="content-loader" href="/admin/logs/errors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle icon nav-icon"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                            <span class="menu-item" data-key="t-error-logs">Error Logs</span>
                        </a>
                    </li>
                    <li>
                        <a class="content-loader" href="/admin/system/migrations">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database icon nav-icon"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                            <span class="menu-item" data-key="t-migrations">Migrations</span>
                        </a>
                    </li>
                    <!--
                    <li>
                        <a class="content-loader" href="/admin/system/cache">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw icon nav-icon"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                            <span class="menu-item" data-key="t-cache">Cache Management</span>
                        </a>
                    </li>
                        -->
                    <li>
                        <a class="content-loader" href="/admin/system/jobs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock icon nav-icon"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            <span class="menu-item" data-key="t-scheduled-tasks">Scheduled Tasks/Jobs</span>
                        </a>
                    </li>
                <!--
                    <li class="menu-title" data-key="t-support">Support &amp; Help</li>
                    <li>
                        <a class="content-loader" href="/admin/help">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle icon nav-icon"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                            <span class="menu-item" data-key="t-help-center">Help Center</span>
                        </a>
                    </li>
                    <li>
                        <a class="content-loader" href="/admin/contact">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail icon nav-icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            <span class="menu-item" data-key="t-contact-support">Contact Support</span>
                        </a>
                    </li>
                    <li>
                        <a class="content-loader" href="/admin/help/faq">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book icon nav-icon"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                            <span class="menu-item" data-key="t-faq">FAQ Management</span>
                        </a>
                    </li>
                    <li>
                        <a class="content-loader" href="/admin/docs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text icon nav-icon"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                            <span class="menu-item" data-key="t-documentation">Documentation</span>
                        </a>
                    </li>
                        -->
                   
                
                    <li class="menu-title" data-key="t-developer-tools">Developer Tools</li>
                    <li>
                        <a class="content-loader" href="/admin/developer/api">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code icon nav-icon"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                            <span class="menu-item" data-key="t-api-documentation">API Documentation</span>
                        </a>
                    </li>
                    <li>
                        <a class="content-loader" href="/admin/developer/logs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file icon nav-icon"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            <span class="menu-item" data-key="t-logs-viewer">Logs Viewer</span>
                        </a>
                    </li>
                    <li>
                        <a class="content-loader" href="/admin/developer/database">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database icon nav-icon"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                            <span class="menu-item" data-key="t-database-management">Database Management</span>
                        </a>
                    </li>
                    <li>
                        <a class="content-loader" href="/admin/Developer/editor">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 icon nav-icon"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                            <span class="menu-item" data-key="t-code-snippets">Code Snippets/Editor</span>
                        </a>
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
