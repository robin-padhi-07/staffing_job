<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WeThink Studio is an award winning UX Agency with practices spanning User Experience, Mobility, Service Design, Digital Transformation, User Research and Agile UX" />
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <title>Wethink - Job Search Portal</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->


</head>

<body>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <ul class="top_navigation">
            <li><a href="index.html"> Home </a></li>
            <li><a href="admin.php">Admin(View users)</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="profile_edit.php">Edit Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="header">
        <!--it Visible For Desktop only-->
        <div class="container">
            <a href="index.html"><img src="assets/images/logo.png" class="top_logo float-left" style="width:140px;"></a>
            <span class="d-block d-sm-none" style="font-size: 26px; cursor: pointer; float: right; margin-top: 0; line-height: 34px; color: #2d2d2d;" onclick="openNav()">&#9776; </span>
            <ul class="navigation desktop_view">
                <li><a href="index.php" class="top_nav">Home </a></li>
                <li><a href="admin.php" class="top_nav">Admin(View users)</a></li>
                <li><a href="profile.php" class="top_nav">Profile</a></li>
                <li><a href="profile_edit.php" class="top_nav">Edit Profile</a></li>
                <li><a href="logout.php" class="top_nav">Logout</a></li>
            </ul>
        </div>
    </div>
    <!--================= Navigation End here ====================-->
    <div class="bottom_nav mobile_view">
        <!--It Visible For MOBILE only-->
        <a href="index.php" class="navigate active float-left">
            <span class="icon-home icon_set"></span>
            <span class="font_12">Home</span>
        </a>
        <a href="search.php" class="search_icon">
            <spa class="icon-tools-and-utensils icon_set"></spa>
        </a>
        <a href="order_history.php" class="navigate active float-right">
            <span class="icon-social icon_set"></span>
            <span class="font_12">Booking</span>
        </a>
    </div>