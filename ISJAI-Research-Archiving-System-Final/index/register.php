<!--Connect to Database-->
<?php
include('../php connect/connect.php');
include('../php functions/common_functions.php');
register();
?>

<!-- HTML Start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | ISJAI Research Hub</title>

    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="../css/register-styles.css?v=<?php echo time(); ?>" rel='stylesheet'>
</head>
<body> 
    <header> <!--Header Part of the Homepage-->
        <nav>
            <div class="header-page">
                <img src="../images/logo.png" alt="ISJAI">
                <h3>ISJAI Research Hub</h3>
                <p>SEÑIOR HIGH SCHOOL DEPARTMENT</p>
            </div>
        </nav>
    </header>
<!-- Main Section of the Webpage -->
    <section class="main">
        <div class="wrapper">
            <!-- Login Form -->
            <div class="login-form">
                <h1>REGISTER</h1>
                <form action="#" method="post">
                    <!-- Name Input of the Form -->
                    <div class="input-box">
                        <i class='bx bxs-user-circle'></i><input type="text" name="name" class="space" placeholder="Enter Name:" required autocomplete=off>
                    </div>
                    <!-- Email Input of the Form -->
                    <div class="input-box">
                        <i class='bx bxs-envelope'></i><input type="email" name="email" class="space" placeholder="Enter Email Address:" required autocomplete=off>
                    </div>
                    <!-- Password Input of the Form -->
                    <div class="input-box-pass">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password" id="password" name="password" class="space" placeholder="Enter Password:" required>
                        <img src="../images/eye-close.png" alt="eye" id="check">
                    </div>
                    <!-- Account Type Input of the Form -->
                    <div class="input-box-type">
                        <i class='bx bx-id-card'></i>
                        <h3>GRADE LEVEL</h3>
                        <input list="usertype-opts" id="grade-level" name="grade-level" class="space" placeholder="Grade 11 | Grade 12" required>
                        <datalist id="usertype-opts">
                            <option value="Grade 11">
                            <option value="Grade 12">
                       </datalist>
                    </div>
                    <!-- Submit Button of the Form -->
                    <div class="submit">
                        <button name="register-submit" type="submit">SUBMIT</button>
                    </div>
                    <!-- If already have an account else redirect to login form -->
                    <div class="login-register">
                        <p>Already have an account? |<a href="./login.php">&nbsp Login</a></p>
                    </div>
                </form>
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

    <script src="../js/password.js"></script>
</body>
</html>
