<!--Connect to Database-->
<?php
session_start();
include('../php connect/connect.php');
include('../php functions/common_functions.php');
add_STEM();
?>

<!-- HTML Start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add STEM Documents | ISJAI Research Hub</title>
    <!-- CSS Links -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="../css/add_docu.css?v=<?php echo time(); ?>" rel='stylesheet'>
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
    <!-- Main Section of the Dashboard -->
    <section class="main">
        <div class="wrapper">
            <!-- ADD STEM DOCUMENT Form -->
            <div class="login-form">
                <h1>ADD STEM DOCUMENT</h1>
                <form action="" method="post">
                    <!-- Research Title Input of the Form -->
                    <div class="input-box">
                    <i class='bx bxs-envelope'>
                        </i><input type="text" name="title" class="space" placeholder="Enter Research Title" required autocomplete="off">
                    </div>
                    <!-- Research Author Input of the Form -->
                    <div class="input-box">
                        <i class='bx bxs-user-circle'></i><input type="text" name="author" class="space" placeholder="Enter Name of Author/s" required autocomplete="off">
                    </div>
                     <!-- Research Insert Link of the Form -->
                     <div class="input-box">
                        <i class='bx bxs-window-alt'></i><input type="url" name="link" class="space" placeholder="Enter File Link" required autocomplete="off">
                    </div>
                    <!-- Research Description Input of the Form -->
                    <div class="input-box-desc">
                        <i class='bx bxs-edit'></i><textarea id="description" name="description" class="space" maxlength="524288" placeholder="Enter Research Description" required autocomplete="off"></textarea>
                    </div>
                     <!-- Research Strand Choice of the Form -->
                    <div class="input-box-type">
                        <i class='bx bxs-graduation'></i>
                        <label>RESEARCH STRAND:</label>
                        <input list="usertype-opts" id="usertype-choice" name="strand" class="space" placeholder="STEM | ABM | HUMSS" required>
                        <datalist id="usertype-opts">
                            <option value="STEM">STEM</option>
                            <option value="ABM">ABM</option>
                            <option value="HUMSS">HUMSS</option>
                       </datalist>
                    </div>
                     <!-- Submit Button of the Form -->
                    <div class="submit">
                        <button name="register_submit" type="submit">SUBMIT</button>
                    </div>
                    <!-- Return to Dashboard -->
                    <div class="return_dash">
                        <p>Return to Dashboard? |<a href="./dashboard-documents-strands.php">&nbspReturn</a> |
                        <a href="./add_abm.php">ABM</a> |
                        <a href="./add_humms.php">HUMSS</a></p>
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
</body>
</html>
