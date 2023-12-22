<!-- PHP Connection to database -->
<?php
session_start();
include('../php connect/connect.php');
include('../php functions/common_functions.php');
if(!isset($_SESSION['user_name'])) {
    header('location: login.php');
}
?>

<!-- HTML Start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISJAI Research Hub</title>
    <!-- CSS Links -->
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="../css/home-styles.css?v=<?php echo time(); ?>" rel='stylesheet'>
</head>
<body> 
    <header> <!--Header Part of the Homepage-->
        <nav>
            <a href="../index/homepage.php" class="home"><img src="../images/logo.png" class="logo" alt="ISJAI Logo"></a>
            <span class="header-title"><h1>ISJAI Research Hub</h1><br><p>SEÑIOR HIGH SCHOOL DEPARTMENT</p></span>
            <img src="../images/user.png" alt="User" class="user" onclick="toggleMenu()">

            <!-- Drop-down menu of the header -->
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="../images/logo.png" alt="ISJAI Logo">
                        <h3><?php echo $_SESSION['user_name']?></h3>
                    </div>
                    <hr>
                    <a href="logout.php" class="log-out" onclick="return confirm('Are you sure you want to Log Out?')"><p>Log out</p></a>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="strands">
            
            <!--Middle Section of the Homepage (Specialization Tracks- STEM, ABM, and HUMSS)-->
            <div class="strand-cards">
                <ul>
                    <li><a href="../index/stem-page.php"><i class='bx bx-hard-hat'></i></a>
                        <h6>STEM</h6><label class="stem">Science, Technology, <br>Engineering and Mathematics</label></li>
                    <li><a href="../index/abm-page.php"><i class='bx bxs-bank'></i></a>
                        <h6>ABM</h6><label class="abm">Accountancy, Business<br>and Management</label></li>
                    <li><a href="../index/humss-page.php"><i class='bx bx-book-reader'></i></a>
                        <h6>HUMSS</h6><label class="humss">Humanities and<br>Social Sciences</label></li>
                </ul>
            </div>
        </div>
    </section>
    <footer>
        <!--Footer Part of the Homepage (ISJAI quote, Copyright Statements, and Contacts)-->
        <div class="quote">
            <h3><b>SERVE THE INTEREST OF JESUS, LIKE ST. JOSEPH.</b></h3>
            <p>© IBAAN SAINT JAMES ACADEMY. ALL RIGHTS RESERVED.</p>
        <div class="social-media">
        <ul class="socials">
                <li><a target="_blank" href="https://www.facebook.com/sjalibrary" rel="noopener"><i class='bx bxl-facebook-circle'></i></a></li>
                <li><a target="_blank" href="https://www.google.com/maps/place/Ibaan+Saint+James+Academy,+Inc./@13.8193008,121.1305727,17z/data=!3m1!4b1!4m6!3m5!1s0x33bd110eeae5afd9:0x5529b0ef888ab04e!8m2!3d13.8193008!4d121.1324517!16s%2Fg%2F1td_2q7q?entry=ttu" rel="noopener"><i class='bx bx-map'></i></a></li>
                <li><a target="_blank" href="https://sja-osjschools.edu.ph/portal/student/" rel="noopener"><i class='bx bx-globe'></i></a></li>
            </ul>
            </div>
        </div>
    </footer>

    <!-- Javascript for user-menu -->
    <script src="../js/user-menu.js"></script>
</body>
</html>