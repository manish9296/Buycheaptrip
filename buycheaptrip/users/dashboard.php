<?php
include "../connection.php";
session_start();
if (($_SESSION["usersID"] == "")) {
  header("Location:../index");
}
?>

<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item"><a href="index.h">Home</a></li> -->
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="row">
            <?php 
             $query = "SELECT * FROM `thailand_customers`where account_id='$_SESSION[userEmail]'"; 
             $res = mysqli_query($conn, $query);
             $rowCount = mysqli_num_rows($res);
            ?>
            <div class="card">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card-body">
                    <h4 class="card-title">Thailand Package</h4>
                    <p class="card-text">Number of Thailand Package</p>
                    <h3><?php echo $rowCount; ?></h3>
                    <a href="thailand_package" class="card-link btn btn-primary">View More</a>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </main><!-- End #main -->

   <?php include('footer.php'); ?>