<?php
session_start();
if(!isset($_SESSION["adminloggedin"]) || $_SESSION["adminloggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<head>
    <?php include 'tags.php';?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo-png.png">
    <link rel="apple-touch-icon" sizes="16x16"  href="images/logo-png.png" />
    <title>AimCab Admin</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
        }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Check if the submenus are currently visible
        var isUpdateTripSubMenuVisible = false;

        // Click event for 'Update Trip'
        $("#updateTripDropdown").click(function (e) {
            e.preventDefault();
            // Toggle the visibility of 'Update Trip' submenu
            $("#updateTripSubMenu").toggle();
            // Update the visibility state
            isUpdateTripSubMenuVisible = !isUpdateTripSubMenuVisible;
        });

        // Click event for 'WTL_Update Trip' and 'AIM_Update Trip'
        $('#updateTripSubMenu a').click(function (e) {
            // Stop event propagation to prevent closing the submenu
            e.stopPropagation();
        });

        // Click event for the document
        $(document).click(function (e) {
            // Check if the clicked element is outside 'Update Trip' submenu
            if (!$(e.target).closest('#updateTripDropdown').length && !$(e.target).closest('#updateTripSubMenu').length) {
                // Hide 'Update Trip' submenu only if it is currently visible
                if (isUpdateTripSubMenuVisible) {
                    $("#updateTripSubMenu").hide();
                    // Update the visibility state
                    isUpdateTripSubMenuVisible = false;
                }
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        // Check if the submenu is currently visible
        var isAddTripSubMenuVisible = false;

        // Click event for 'Trip Roots'
        $("#tripDropdown").click(function (e) {
            e.preventDefault();
            // Toggle the visibility of 'Add Trip' submenu
            $("#addTripSubMenu").toggle();
            // Update the visibility state
            isAddTripSubMenuVisible = !isAddTripSubMenuVisible;
        });

        // Click event for 'WTL _Add Trip' and 'AimCab _Add Trip'
        $('#addTripSubMenu a').click(function (e) {
            // Stop event propagation to prevent closing the submenu
            e.stopPropagation();
        });

        // Click event for the document
        $(document).click(function (e) {
            // Check if the clicked element is outside 'Trip Roots' and 'Add Trip' submenu
            if (!$(e.target).closest('#tripDropdown').length && !$(e.target).closest('#addTripSubMenu').length) {
                // Hide 'Add Trip' submenu only if it is currently visible
                if (isAddTripSubMenuVisible) {
                    // Check if the clicked element is not a link within the 'Add Trip' submenu
                    if (!$(e.target).closest('#addTripSubMenu a').length) {
                        $("#addTripSubMenu").hide();
                        // Update the visibility state
                        isAddTripSubMenuVisible = false;
                    }
                }
            }
        });
    });
</script>




</head>

<!------------------------------------------Left Panel--------------------------------------------->

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="https://aimcabbooking.com" target="_blank"><i class="menu-icon fa fa-home"></i>  AimCab</a>
                    </li>
                    <li class="menu-title">Admin Access</li><!-- /.menu-title -->
                    <li class="active">
                        <a href="index.php" ><i class="menu-icon fa fa-laptop"></i>  Dashboard</a>
                    </li>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list"></i>All Bookings</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-list"></i><a href="all-bookings.php"> _Online Bookings</a></li>
                            <li><i class="menu-icon fa fa-list"></i><a href="custom_booking_records.php"> _Custom Bookings</a></li>
                            <li><i class="menu-icon fa fa-chain-broken"></i><a href="cancellation.php"> _Cancelled Bookings</a></li>
                        </ul>
                    </li>
                <!--  <li class="menu-item-has-children dropdown">-->
                <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--        <i class="menu-icon fa fa-list"></i> Routes and Price-->
                <!--    </a>-->
                <!--    <ul class="sub-menu children dropdown-menu">-->
                <!--        <li class="menu-item-has-children dropdown" id="tripDropdown">-->
                <!--            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--                <i class="menu-icon fa fa-list"></i> _Add Trip-->
                <!--            </a>-->
                <!--            <ul id="addTripSubMenu" class="sub-menu children dropdown-menu">-->
                <!--                <li><i class="menu-icon fa fa-list"></i><a href="wtl-defaultRate.php">WTL _Add Trip</a></li>-->
                <!--                <li><i class="menu-icon fa fa-list"></i><a href="add-oneway-trip.php">AimCab _Add Trip</a></li>-->
                <!--            </ul>-->
                <!--        </li>-->
                <!--        <li class="menu-item-has-children dropdown" id="updateTripDropdown">-->
                <!--            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--                <i class="menu-icon fa fa-list"></i> _Update Trip-->
                <!--            </a>-->
                            <!-- Third-level dropdown content for 'Update Trip 1' and 'Update Trip 2' -->
                <!--            <ul id="updateTripSubMenu" class="sub-menu children dropdown-menu">-->
                <!--                <li><i class="menu-icon fa fa-list"></i><a href="updatetripWTL.php">WTL_Update Trip</a></li>-->
                <!--                <li><i class="menu-icon fa fa-list"></i><a href="update-trip.php">AIM_update Trip</a></li>-->
                <!--            </ul>-->
                <!--        </li>-->
                                                
                <!--        <li><i class="menu-icon fa fa-chain-broken"></i><a href="on-off-oneway.php"> _Off Trip</a></li>-->
                <!--    </ul>-->
                <!--</li>-->
                
                
                
                
  <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list"></i>Website Dashboard</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-list"></i><a href="wtl-dashboard.php">WTL Dashboard</a></li>
                            <li><i class="menu-icon fa fa-list"></i><a href="aimcab-dashboard.php"> Aimcab DashBoard</a></li>
                           

                        </ul>
                    </li>
                    
                    
                    
                    
                    
                    
                    <!--  <li class="menu-item-has-children dropdown">-->
                    <!--    <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list"></i>WTL Trip Roots</a>-->
                    <!--    <ul class="sub-menu children dropdown-menu">-->
                    <!--        <li><i class="menu-icon fa fa-list"></i><a href="wtl-add-rate-by-state.php"> Add Rate By State WTL</a></li>-->
                    <!--        <li><i class="menu-icon fa fa-list"></i><a href="updatetripWTL.php"> _Update Route Rate</a></li>-->
                    <!--        <li><i class="menu-icon fa fa-chain-broken"></i><a href="wtl-offer-page.php"> _Add Offer</a></li>-->
                    <!--       <li><i class="menu-icon fa fa-chain-broken"></i><a href="wtl-rate-update-by-km.php"> _Add Rate By Km</a></li>-->
                    <!--        <li><i class="menu-icon fa fa-chain-broken"></i><a href="wtl-defaultRate.php"> Update Default Rate</a></li>-->

                    <!--        <li><i class="menu-icon fa fa-chain-broken"></i><a href="wtl-saved-user-data.php"> Saved User Data</a></li>-->

                    <!--    </ul>-->
                    <!--</li>-->
                    
                    
                    <!--  <li class="menu-item-has-children dropdown">-->
                    <!-- <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list"></i>WTL Data</a>-->
                    <!--    <ul class="sub-menu children dropdown-menu">-->
                            <!--<li><i class="menu-icon fa fa-list"></i><a href="add-oneway-trip.php"> Add Trip WTL</a></li>-->
                         
                    <!--        <li><i class="menu-icon fa fa-chain-broken"></i><a href="wtl-offer-page.php"> _Add Offer</a></li>-->
                          

                    <!--        <li><i class="menu-icon fa fa-chain-broken"></i><a href="wtl-saved-user-data.php"> Saved User Data</a></li>-->
                    <!--                                    <li><i class="menu-icon fa fa-chain-broken"></i><a href="wtl-query.php"> Query</a></li>-->

                    
                    <!-- </ul>-->
                    <!--</li>-->
                    
                    
                    
                    
                    
                    
                    
                    
                       <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list"></i>Outstation Roots</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!--<li><i class="menu-icon fa fa-list"></i><a href="add-oneway-trip.php"> Add Trip WTL</a></li>-->
                            <li><i class="menu-icon fa fa-list"></i><a href="updatetripoutstation.php"> _Update Route Rate</a></li>
                       

                        </ul>
                    </li>
                   <!--- <li class="menu-item-has-children dropdown">
                        <a href="new-price.php" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>  New  Pricelist</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="all-bookings.php" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list"></i>  Online Bookings</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="custom_booking_records.php" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list"></i>  Custom Bookings</a>
                    </li>--->
                    <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th-list"></i>Fleet</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-car"></i><a href="cabs.php"> _Cabs</a></li>
                            <li><i class="menu-icon fa fa-users"></i><a href="drivers.php"> _Drivers</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="out-source.php"> _Outsource</a></li>
                        </ul>
                    </li>
                     <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  <i class="menu-icon fa fa-users"></i>B2B</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-users"></i><a href="all-b2b.php"> _All B2B</a></li>
                            <li><i class="menu-icon fa fa-users"></i><a href="request-b2b.php"> _Request B2B</a></li>
                            <li><i class="menu-icon fa fa-users"></i><a href="b2b-report.php"> _B2B Report</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  <i class="menu-icon fa fa-users"></i>Vendors</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-users"></i><a href="vendors.php"> _All Vendors</a></li>
                            <li><i class="menu-icon fa fa-users"></i><a href="request-vendor.php"> _Request Vendor</a></li>
                            <li><i class="menu-icon fa fa-users"></i><a href="vendor-report.php"> _Vendor Report</a></li>
                        </ul>
                    </li>
                    
                     <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  <i class="menu-icon fa fa-users"></i>Accountant</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-users"></i><a href="view_accountant.php"> _All Accountant</a></li>
                            <li><i class="menu-icon fa fa-users"></i><a href="add_accountant.php"> _Add Accountant</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th-large"></i> </i>Custom Bookings</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-rub"></i><a href="https://aimcabbooking.com/admin/custom-bookings.php">__Aimcab</a></li>
                            <li><i class="menu-icon fa fa-rub"></i><a href="https://aimcabbooking.com/admin/custom-bookings-wtl.php">__WTL</a></li>
                            <li><i class="menu-icon fa fa-cog"></i><a href="invoice-history.php">__Invoice History</a></li>
                        </ul>
                    </li>
                    <!--<li class="menu-item-has-children dropdown">
                        <a href="cancellation.php" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-chain-broken"></i>  Cancelled Bookings</a>
                    </li>--->
                    <li class="menu-item-has-children dropdown">
                        <a href="user-complaint.php" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-exclamation-triangle"></i>  Complaints</a>
                    </li>
                     <!--<li class="menu-item-has-children dropdown">
                        <a href="price.php" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>  Prices</a>
                    </li>-->
                    <!-- <li class="menu-item-has-children dropdown">-->
                    <!--    <a href="queries.php" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-question"></i>  Queries</a>-->
                    <!--</li>-->
                    
                    
                    
                     <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Queries</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-rub"></i> <a href="queries.php">AIMCAB  Queries</a></li>
                            <li><i class="menu-icon fa fa-cog"></i> <a href="wtl-query.php">WTL Query</a></li>
                        </ul>
                    </li>
                    
                    
                    
                    
                    
                    
                     <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>New</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-rub"></i><a href="post.php">__Post</a></li>
                            <li><i class="menu-icon fa fa-cog"></i><a href="offer.php">__Offers</a></li>
                            <li><i class="menu-icon fa fa-gift"></i><a href="event.php">__Events</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="notification-index.php">  <i class="menu-icon fa fa-bell"></i>  Notifications</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <li>
                        <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>  Admin</a>
                      </li>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>

    <div id="right-panel" class="right-panel">

        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" style="margin-left:-40px;" href="./"><img src="images/jpeg-lobo.jpg" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/jpeg-lobo.jpg" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle" style="margin-left:-25px;"><i class="fa fa-bars" title="Full Screen"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                  <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                      <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/avatar/all.jpg" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>Notifications <span class="count">13</span></a>
                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>
                            <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>