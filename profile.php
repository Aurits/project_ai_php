<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Profile</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">
        <!-- Header -->
        <div class="header">
            <div class="header-left">
                <a href="index.php" class="logo">
                    <img src="assets/img/logo.png" alt="Logo" />
                </a>
                <a href="index.php" class="logo logo-small">
                    <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30" />
                </a>
            </div>
            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here" />
                    <button class="btn" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>

            <!-- Notifications -->
            <li class="nav-item dropdown noti-dropdown me-2">
                <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                    <img src="assets/img/icons/notification-icon.svg" alt="Notifications" />
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti">Clear All</a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg" />
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details">
                                                <span class="noti-title">Dr. Smith</span> reviewed
                                                <span class="noti-title">your image upload</span>
                                            </p>
                                            <p class="noti-time">
                                                <span class="notification-time">4 mins ago</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg" />
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details">
                                                <span class="noti-title">System</span> processed your scan for
                                                <span class="noti-title">image IMG002</span>
                                            </p>
                                            <p class="noti-time">
                                                <span class="notification-time">6 mins ago</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg" />
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details">
                                                <span class="noti-title">Dr. Patel</span> commented on
                                                <span class="noti-title">image IMG003</span>
                                            </p>
                                            <p class="noti-time">
                                                <span class="notification-time">8 mins ago</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                    </div>
                </div>
            </li>

            <!-- Fullscreen Mode -->
            <li class="nav-item zoom-screen me-2">
                <a href="#" class="nav-link header-nav-list win-maximize">
                    <img src="assets/img/icons/fullscreen-icon.svg" alt="Fullscreen" />
                </a>
            </li>

            <!-- User Menu -->
            <li class="nav-item dropdown has-arrow new-user-menus">
                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <span class="user-img">
                        <img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Admin User" />
                        <div class="user-text">
                            <h6>Admin User</h6>
                            <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle" />
                        </div>
                        <div class="user-text">
                            <h6>Admin User</h6>
                            <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="profile.php">My Profile</a>
                    <a class="dropdown-item" href="login.php">Logout</a>
                </div>
            </li>
        </div>
        <!-- /Header -->

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <!-- Main Menu -->
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu active">
                            <a href="#"><i class="feather-grid"></i> <span> Dashboard</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li>
                                    <a href="index.php" class="active">Admin Dashboard</a>
                                </li>
                                <li>
                                    <a href="patient-dashboard.php">Patient Dashboard</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Users Section -->
                        <li class="menu-title">
                            <span>Users</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-users"></i> <span> User Management</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="users.php">User List</a></li>
                                <li><a href="add-user.php">Add User</a></li>
                            </ul>
                        </li>

                        <!-- Management -->
                        <li class="menu-title">
                            <span>Management</span>
                        </li>
                        <li>
                            <a href="uploads.php"><i class="fas fa-upload"></i> <span>Upload Images</span></a>
                        </li>
                        <li>
                            <a href="scans.php"><i class="fas fa-clipboard-list"></i> <span>Manage Scans</span></a>
                        </li>
                        <li>
                            <a href="uploads.php"><i class="fas fa-eye"></i> <span>Scan Status</span></a>
                        </li>

                        <!-- Pages -->
                        <li class="menu-title">
                            <span>Pages</span>
                        </li>
                        <li>
                            <a href="profile.php"><i class="fas fa-user"></i> <span>Profile</span></a>
                        </li>
                        <li>
                            <a href="notifications.php"><i class="fas fa-bell"></i> <span>Notifications</span></a>
                        </li>

                        <!-- Authentication -->
                        <li class="menu-title">
                            <span>Authentication</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="forgot-password.php">Forgot Password</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Profile</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-header">
                            <div class="row align-items-center">
                                <div class="col-auto profile-image">
                                    <a href="#">
                                        <img class="rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                                    </a>
                                </div>
                                <div class="col ms-md-n2 profile-user-info">
                                    <h4 class="user-name mb-0">John Doe</h4>
                                    <h6 class="text-muted">UI/UX Design Team</h6>
                                    <div class="user-Location"><i class="fas fa-map-marker-alt"></i> Florida, United
                                        States</div>
                                    <div class="about-text">Lorem ipsum dolor sit amet.</div>
                                </div>
                                <div class="col-auto profile-btn">
                                    <a href="" class="btn btn-primary">
                                        Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="profile-menu">
                            <ul class="nav nav-tabs nav-tabs-solid">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content profile-tab-cont">

                            <div class="tab-pane fade show active" id="per_details_tab">

                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>Personal Details</span>
                                                    <a class="edit-link" data-bs-toggle="modal" href="#edit_personal_details"><i class="far fa-edit me-1"></i>Edit</a>
                                                </h5>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
                                                    <p class="col-sm-9">John Doe</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date of
                                                        Birth</p>
                                                    <p class="col-sm-9">24 Jul 1983</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
                                                    <p class="col-sm-9"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a1cbcec9cfc5cec4e1c4d9c0ccd1cdc48fc2cecc">[email&#160;protected]</a>
                                                    </p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile</p>
                                                    <p class="col-sm-9">305-310-5857</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0">Address</p>
                                                    <p class="col-sm-9 mb-0">4663 Agriculture Lane,<br>
                                                        Miami,<br>
                                                        Florida - 33165,<br>
                                                        United States.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">

                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>Account Status</span>
                                                    <a class="edit-link" href="#"><i class="far fa-edit me-1"></i>
                                                        Edit</a>
                                                </h5>
                                                <button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> Active</button>
                                            </div>
                                        </div>


                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>Skills </span>
                                                    <a class="edit-link" href="#"><i class="far fa-edit me-1"></i>
                                                        Edit</a>
                                                </h5>
                                                <div class="skill-tags">
                                                    <span>Html5</span>
                                                    <span>CSS3</span>
                                                    <span>WordPress</span>
                                                    <span>Javascript</span>
                                                    <span>Android</span>
                                                    <span>iOS</span>
                                                    <span>Angular</span>
                                                    <span>PHP</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>


                            <div id="password_tab" class="tab-pane fade">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Change Password</h5>
                                        <div class="row">
                                            <div class="col-md-10 col-lg-6">
                                                <form>
                                                    <div class="form-group">
                                                        <label>Old Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>New Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Confirm Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>