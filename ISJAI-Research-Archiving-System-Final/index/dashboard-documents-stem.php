<!-- PHP Connection to database -->
<?php
session_start();
include('../php connect/connect.php');
include('../php functions/common_functions.php');
if(!isset($_SESSION['admin_name'])) {
    header('location: login.php');
}
?>

<!-- HTML Start --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | ISJAI Research Hub</title>
    <link rel="stylesheet" href="../css/dashboard-documents.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;500;600&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Sidebar --> 
    <div class="sidebar">
        <div class="logo_details">
            <a href="./dashboard.php" class="logo"><img src="../images/logo.png" alt="ISJAI Logo"></a>
            <span class="logo_name">ISJAI</span>
        </div>
        <!-- Sidebar Links --> 
        <ul class="nav_links">
            <li><a href="dashboard.php" class="records"><i class='bx bxs-data'></i><span class="link_name">Student Records</span></a></li>
            <li><a href="dashboard-documents-strands.php" class="docs"><i class='bx bxs-file'></i><span class="link_name">Research Documents</span></a></li>
            <li><a href="add_stem.php" class="adding"><i class='bx bxs-file-plus'></i><span class="link_name">Add STEM Document</span></a></li>
            <li><a href="add_abm.php" class="adding"><i class='bx bxs-file-plus'></i><span class="link_name">Add ABM Document</span></a></li>
            <li><a href="add_humms.php" class="adding"><i class='bx bxs-file-plus'></i><span class="link_name">Add HUMSS Document</span></a></li>
            <li><a href="dashboard-user.php" class="user"><i class='bx bxs-user-circle'></i><span class="link_name">Admin</span></a></li>
            <li><a href="logout.php" class="log-out" onclick="return confirm('Are you sure you want to Log Out?')"><i class='bx bx-log-out'></i><span class="link_name">Logout</span></a></li>
        </ul>
    </div>
    <!-- Dashboard Section --> 
    <section class="dashboard">
        <nav>
            <div class="menu">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard-admin">RESEARCH DOCUMENTS</span>
            </div>
            <div class="search-box">
            <!-- PHP Search Connection --> 
            <?php
            if(isset($_GET['search'])){
                $filtervalues = $_GET['search'];
                $select_query = "Select *from `research_stem` where CONCAT(Research_Title, Author) LIKE '%$filtervalues%'";
            }else{
                $select_query = "Select *from `research_stem`";
            }
                $query_run = mysqli_query($con, $select_query);
            ?>
            <form method="get">
            <label for="search-user">
                    <input name="search" type="text" class="search-box" placeholder="Search..." autocomplete=off>
                    <a href="#"><i class='bx bx-search'></i></a>
                    </label>
                </form>
            </div>
        </nav>
    <!-- Research Content --> 
    <div class="strands">
        <!-- STEM Table -->
        <h1 class="strand-details">Science, Technology, Engineering, and Mathematics (STEM)</h1>
        <table class="content-table">
            <thead>
                <tr>
                <th class="title">RESEARCH TITLE</th>
                <th>AUTHOR</th>
                <th>DATE UPLOADED</th>
                </tr>
            </thead>
            <tbody>
            <!-- Fetch Research (PHP) --> 
            <?php
                while($row = mysqli_fetch_array($query_run)){
            ?>
                <tr>
                    <td><?php echo $row['Research_Title']; ?></td>
                    <td><?php echo $row['Author']; ?></td>
                    <td><?php echo $row['Date_Added']; ?></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</section>
    <!-- Link to JavaScript --> 
    <script src="../js/sidebar.js"></script>

</body>
</html>
