<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
	
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />
    
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/feather/css/feather.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-n.min.css">
    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="bower_components/chartist/css/chartist.css" type="text/css" media="all">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/widget.css">
</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <!-- [ Pre-loader ] end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- [ Header ] start -->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="index.php">
                            <img class="img-fluid" width="60px" src="logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            
                        </ul>
                        <ul class="nav-right">                          
                           
                            <li class="user-profile header-notification">

                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <span><?php echo $_SESSION['Auname'] ?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        
                                        <li>
                                            <a href="resetpassword.php">
                                            <i class="feather icon-lock"></i> Change Password

                                        </a>
                                        </li>
                                        <li>
                                            <a href="../logout.php">
                                            <i class="feather icon-log-out"></i> Logout

                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- [ navigation menu ] start -->
                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="pcoded-navigation-label">Navigation</div>
                                <ul class="pcoded-item pcoded-left-item">
                                   <li class="">
                                        <a href="index.php" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-menu"></i>
        									</span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>
                                    </li>
                                  
                                    <li class="">
                                        <a href="form.php" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-menu"></i>
        									</span>
                                            <span class="pcoded-mtext">Add Record</span>
                                        </a>
                                    </li>
									
									<li class="">
                                        <a href="table view/dbtable.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-menu"></i>
        									</span>
                                            <span class="pcoded-mtext"> Student Table</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="table view/facultytable.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-menu"></i>
        									</span>
                                            <span class="pcoded-mtext"> Faculty Table</span>
                                        </a>
                                    </li>
                                  
                                </ul>
                              
                            </div>
                        </div>
                    </nav>
                    <!-- [ navigation menu ] end -->

                    <style>
                        .img-fluid{
                            
  padding: 0px;
  border-radius: 10px;
                        }
                        </style>