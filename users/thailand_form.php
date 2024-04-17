<?php
include "../connection.php";
session_start();
if (($_SESSION["usersID"] == "")) {
    header("Location:../index");

}
?>
<style>
    .d-flex {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .form-row {
        margin: 5px;
    }
    .hidden {
    display: none !important;
}
</style>

<?php include 'header.php';?>
<?php include 'sidebar.php';?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Thailand Package Form </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Layouts</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Thailand Trip Package</span></h5>
                        <form class="row g-3" action="" method="post">
                            <div class="col-md-12">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                <span id="nameError" style="color: red;"></span>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                <span id="emailError" style="color: red;"></span>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone" required>
                                <span id="phoneError" style="color: red;"></span>
                            </div>
                            <div class="col-md-6">
                                <input type="date" name="custdate" id="custdate" class="form-control date-input" placeholder="Date" required>
                                <span id="dateError" style="color: red;"></span>
                            </div>
                            <div class="col-md-6">
                                <!-- <input type="number" name="pax" id="pax" class="form-control" placeholder="PAX" required> -->
                                <select class="form-control" id="pax" name="pax" required>
                                                                <option selected="selected" value="">0</option>    
                                                                <option value="1">1</option>    
                                                                <option value="2">2</option>    
                                                                <option value="3">3</option>    
                                                                <option value="4">4</option>    
                                                                <option value="5">5</option>    
                                                                <option value="6">6</option>    
                                                                <option value="7">7</option>    
                                                                <option value="8">8</option>    
                                                                <option value="9">9</option>    
                                                                <option value="10">10</option>    
                                                                <option value="11">11</option>    
                                                                <option value="12">12</option>    
                                                                <option value="13">13</option>    
                                                                <option value="14">14</option>    
                                                                <option value="15">15</option>    
                                                           </select>
                                <span id="personsError" style="color: red;"></span>
                            </div>
                            <br>
                            <br>
                            <h1 class="text-center text-info">THAILAND</h1>
                            <div class="main bg-info">
                                <div id="formContainer1" class="d-flex justify-content-center">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control city" name="city[]" id="city1" data-id="1">
                                                <option value="" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-attribute="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control hotel" name="hotel[]" id="hotel1" data-id="1">
                                                <option value="" selected>Select Hotel</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control category" name="category[]" id="category1" data-id="1">
                                                <option value="" selected>Select Category</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="room[]" id="room1">
                                                <option value="" selected>Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="night[]" id="night1">
                                                <option value="" selected>Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adult[]" id="adult1">
                                                <option value="" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="hotelCheckinDate[]" id="hotelCheckinDate1">
                                        </div>
                                    </div>
                                </div>
                                <div id="formContainer2" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control city" name="city[]" id="city2" data-id="2">
                                                <option value="" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-attribute="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control hotel" name="hotel[]" id="hotel2" data-id="2">
                                                <option value="" selected>Select Hotel</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control category" name="category[]" id="category2" data-id="2">
                                                <option value="" selected>Select Category</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="room[]" id="room2">
                                                <option value="" selected>Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="night[]" id="night2">
                                                <option value="" selected>Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adult[]" id="adult2">
                                                <option value="" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="hotelCheckinDate[]" id="hotelCheckinDate2">
                                        </div>
                                    </div>
                                </div>
                                <div id="formContainer3" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control city" name="city[]" id="city3" data-id="3">
                                                <option value="" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-attribute="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control hotel" name="hotel[]" id="hotel3" data-id="3">
                                                <option value="" selected>Select Hotel</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control category" name="category[]" id="category3" data-id="3">
                                                <option value="" selected>Select Category</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="room[]" id="room3">
                                                <option value="" selected>Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="night[]" id="night3">
                                                <option value="" selected>Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adult[]" id="adult3">
                                                <option value="" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="hotelCheckinDate[]" id="hotelCheckinDate3">
                                        </div>
                                    </div>
                                </div>
                                <div id="formContainer4" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control city" name="city[]" id="city4" data-id="4">
                                                <option value="" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-attribute="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control hotel" name="hotel[]" id="hotel4" data-id="4">
                                                <option value="" selected>Select Hotel</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control category" name="category[]" id="category4" data-id="4">
                                                <option value="" selected>Select Category</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="room[]" id="room4">
                                                <option value="" selected>Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="night[]" id="night4">
                                                <option value="" selected>Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adult[]" id="adult4">
                                                <option value="" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="hotelCheckinDate[]" id="hotelCheckinDate4">
                                        </div>
                                    </div>
                                </div>
                                <div id="formContainer5" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control  city" name="city[]" id="city5" data-id="5">
                                                <option value="" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-attribute="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control hotel" name="hotel[]" id="hotel5" data-id="5">
                                                <option value="" selected>Select Hotel</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control category" name="category[]" id="category5" data-id="5">
                                                <option value="" selected>Select Category</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="room[]" id="room5">
                                                <option value="" selected>Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="night[]" id="night5">
                                                <option value="" selected>Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adult[]" id="adult5">
                                                <option value="" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="hotelCheckinDate[]" id="hotelCheckinDate5">
                                        </div>
                                    </div>
                                </div>
                                <div id="formContainer6" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control  city" name="city[]" id="city6" data-id="6">
                                                <option value="" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-attribute="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control hotel" name="hotel[]" id="hotel6" data-id="6">
                                                <option value="" selected>Select Hotel</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control category" name="category[]" id="category6" data-id="6">
                                                <option value="" selected>Select Category</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="room[]" id="room6">
                                                <option value="" selected>Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="night[]" id="night6">
                                                <option value="" selected>Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adult[]" id="adult6">
                                                <option value="" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="hotelCheckinDate[]" id="hotelCheckinDate6">
                                        </div>
                                    </div>
                                </div>
                                <div id="formContainer7" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control  city" name="city[]" id="city7" data-id="7">
                                                <option value="" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-attribute="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control hotel" name="hotel[]" id="hotel7" data-id="7">
                                                <option value="" selected>Select Hotel</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control category" name="category[]" id="category7" data-id="7">
                                                <option value="" selected>Select Category</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="room[]" id="room7">
                                                <option value="" selected>Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="night[]" id="night7">
                                                <option value="" selected>Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adult[]" id="adult7">
                                                <option value="" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="hotelCheckinDate[]" id="hotelCheckinDate7">
                                        </div>
                                    </div>
                                </div>
                                <div id="formContainer8" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control  city" name="city[]" id="city8" data-id="8">
                                                <option value="" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-attribute="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control hotel" name="hotel[]" id="hotel8" data-id="8">
                                                <option value="" selected>Select Hotel</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control category" name="category[]" id="category8" data-id="8">
                                                <option value="" selected>Select Category</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="room[]" id="room8">
                                                <option value="" selected>Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="night[]" id="night8">
                                                <option value="" selected>Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adult[]" id="adult8">
                                                <option value="" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="hotelCheckinDate[]" id="hotelCheckinDate8">
                                        </div>
                                    </div>
                                </div>
                                <div id="formContainer9" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control  city" name="city[]" id="city9" data-id="9">
                                                <option value="" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-attribute="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control hotel" name="hotel[]" id="hotel9" data-id="9">
                                                <option value="" selected>Select Hotel</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control category" name="category[]" id="category9" data-id="9">
                                                <option value="" selected>Select Category</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="room[]" id="room9">
                                                <option value="" selected>Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="night[]" id="night9">
                                                <option value="" selected>Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adult[]" id="adult9">
                                                <option value="" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="hotelCheckinDate[]" id="hotelCheckinDate9">
                                        </div>
                                    </div>
                                </div>
                                <div id="formContainer10" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control  city" name="city[]" id="city10" data-id="10">
                                                <option value="" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-attribute="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control hotel" name="hotel[]" id="hotel10" data-id="10">
                                                <option value="" selected>Select Hotel</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control category" name="category[]" id="category10" data-id="10">
                                                <option value="" selected>Select Category</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="room[]" id="room10">
                                                <option value="" selected>Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="night[]" id="night10">
                                                <option value="" selected>Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adult[]" id="adult10">
                                                <option value="" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="hotelCheckinDate[]" id="hotelCheckinDate10">
                                        </div>
                                    </div>
                                </div>
                                <div id="formContainer11" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control  city" name="city[]" id="city11" data-id="11">
                                                <option value="" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-attribute="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control hotel" name="hotel[]" id="hotel11" data-id="11">
                                                <option value="" selected>Select Hotel</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control category" name="category[]" id="category11" data-id="11">
                                                <option value="" selected>Select Category</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="room[]" id="room11">
                                                <option value="" selected>Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="night[]" id="night11">
                                                <option value="" selected>Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adult[]" id="adult11">
                                                <option value="" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="hotelCheckinDate[]" id="hotelCheckinDate11">
                                        </div>
                                    </div>
                                </div>
                                <div id="formContainer12" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control  city" name="city[]" id="city12" data-id="12">
                                                <option value="" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-attribute="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control hotel" name="hotel[]" id="hotel12" data-id="12">
                                                <option value="" selected>Select Hotel</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control category" name="category[]" id="category12" data-id="12">
                                                <option value="" selected>Select Category</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="room[]" id="room12">
                                                <option value="" selected>Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="night[]" id="night12">
                                                <option value="" selected>Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adult[]" id="adult12">
                                                <option value="" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="hotelCheckinDate[]" id="hotelCheckinDate12">
                                        </div>
                                    </div>
                                </div>
                                <div id="formContainer13" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control  city" name="city[]" id="city13" data-id="13">
                                                <option value="" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-attribute="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control hotel" name="hotel[]" id="hotel13" data-id="13">
                                                <option value="" selected>Select Hotel</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control category" name="category[]" id="category13" data-id="13">
                                                <option value="" selected>Select Category</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="room[]" id="room13">
                                                <option value="" selected>Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="night[]" id="night13">
                                                <option value="" selected>Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adult[]" id="adult13">
                                                <option value="" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="hotelCheckinDate[]" id="hotelCheckinDate13">
                                        </div>
                                    </div>
                                </div>
                                <div id="formContainer14" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control  city" name="city[]" id="city14" data-id="14">
                                                <option value="" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-attribute="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control hotel" name="hotel[]" id="hotel14" data-id="14">
                                                <option value="" selected>Select Hotel</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control category" name="category[]" id="category14" data-id="14">
                                                <option value="" selected>Select Category</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="room[]" id="room14">
                                                <option value="" selected>Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="night[]" id="night14">
                                                <option value="" selected>Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adult[]" id="adult14">
                                                <option value="" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="hotelCheckinDate[]" id="hotelCheckinDate14">
                                        </div>
                                    </div>
                                </div>
                                <div id="formContainer15" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control  city" name="city[]" id="city15" data-id="15">
                                                <option value="" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-attribute="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control hotel" name="hotel[]" id="hotel15" data-id="15">
                                                <option value="" selected>Select Hotel</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control category" name="category[]" id="category15" data-id="15">
                                                <option value="" selected>Select Category</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="room[]" id="room15">
                                                <option value="" selected>Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="night[]" id="night15">
                                                <option value="" selected>Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adult[]" id="adult15">
                                                <option value="" selected>Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="hotelCheckinDate[]" id="hotelCheckinDate15">
                                        </div>
                                    </div>
                                </div>

                                <!-- <button type="button" id="addButton" class="btn btn-primary">Add</button> -->
                                <button type="button" id="addButtonmain" class="btn btn-primary">Add</button>
                                <button type="button" id="removeButton" class="btn btn-danger" style="display:none;">Remove</button>
                                <!-- city transport -->
                                <div id="cityformContainer1" class="d-flex justify-content-center">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control transcity" name="transcity[]" id="transcity1" data-id="1">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-category1="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control transport transport" name="transport[]" id="transport1" data-id="1">
                                                <option value="" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="transCategory[]" id="transCategory1" data-id="1">
                                                <option value="" selected>Select Persion</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="transCheckinDate" id="transCheckinDate">
                                        </div>

                                    </div>
                                </div>
                                <div id="cityformContainer2" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control transcity" name="transcity[]" id="transcity2" data-id="2">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-category1="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control transport transport" name="transport[]" id="transport2" data-id="2">
                                                <option value="" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="transCategory[]" id="transCategory2" data-id="2">
                                                <option value="" selected>Select Persion</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="transCheckinDate" id="transCheckinDate">
                                        </div>

                                    </div>
                                </div>
                                <div id="cityformContainer3" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control transcity" name="transcity[]" id="transcity3" data-id="3">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-category1="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control transport transport" name="transport[]" id="transport3" data-id="3">
                                                <option value="" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="transCategory[]" id="transCategory3" data-id="3">
                                                <option value="" selected>Select Persion</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="transCheckinDate" id="transCheckinDate">
                                        </div>

                                    </div>
                                </div>
                                <div id="cityformContainer4" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control transcity" name="transcity[]" id="transcity4" data-id="4">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-category1="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control transport" name="transport[]" id="transport4" data-id="4">
                                                <option value="" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="transCategory[]" id="transCategory4" data-id="4">
                                                <option value="" selected>Select Persion</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="transCheckinDate" id="transCheckinDate">
                                        </div>

                                    </div>
                                </div>
                                <div id="cityformContainer5" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control transcity" name="transcity[]" id="transcity5" data-id="5">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-category1="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control transport" name="transport[]" id="transport5" data-id="5">
                                                <option value="" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="transCategory[]" id="transCategory5" data-id="5">
                                                <option value="" selected>Select Persion</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="transCheckinDate" id="transCheckinDate">
                                        </div>

                                    </div>
                                </div>
                                <div id="cityformContainer6" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control transcity" name="transcity[]" id="transcity6" data-id="6">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-category1="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control transport" name="transport[]" id="transport6" data-id="6">
                                                <option value="" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="transCategory[]" id="transCategory6" data-id="6">
                                                <option value="" selected>Select Persion</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="transCheckinDate" id="transCheckinDate">
                                        </div>

                                    </div>
                                </div>
                                <div id="cityformContainer7" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control transcity" name="transcity[]" id="transcity7" data-id="7">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-category1="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control transport" name="transport[]" id="transport7" data-id="7">
                                                <option value="" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="transCategory[]" id="transCategory7" data-id="7">
                                                <option value="" selected>Select Persion</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="transCheckinDate" id="transCheckinDate">
                                        </div>

                                    </div>
                                </div>
                                <div id="cityformContainer8" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control transcity" name="transcity[]" id="transcity8" data-id="8">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-category1="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control transport" name="transport[]" id="transport8" data-id="8">
                                                <option value="" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="transCategory[]" id="transCategory8" data-id="8">
                                                <option value="" selected>Select Persion</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="transCheckinDate" id="transCheckinDate">
                                        </div>

                                    </div>
                                </div>
                                <div id="cityformContainer9" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control transcity" name="transcity[]" id="transcity9" data-id="9">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-category1="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control transport" name="transport[]" id="transport9" data-id="9">
                                                <option value="" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="transCategory[]" id="transCategory9" data-id="9">
                                                <option value="" selected>Select Persion</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="transCheckinDate" id="transCheckinDate">
                                        </div>

                                    </div>
                                </div>
                                <div id="cityformContainer10" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control transcity" name="transcity[]" id="transcity10" data-id="10">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-category1="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control transport" name="transport[]" id="transport10" data-id="10">
                                                <option value="" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="transCategory[]" id="transCategory10" data-id="10">
                                                <option value="" selected>Select Persion</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="transCheckinDate" id="transCheckinDate">
                                        </div>

                                    </div>
                                </div>
                                <div id="cityformContainer11" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control transcity" name="transcity[]" id="transcity11" data-id="11">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-category1="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control transport" name="transport[]" id="transport11" data-id="11">
                                                <option value="" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="transCategory[]" id="transCategory11" data-id="11">
                                                <option value="" selected>Select Persion</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="transCheckinDate" id="transCheckinDate">
                                        </div>

                                    </div>
                                </div>
                                <div id="cityformContainer12" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control transcity" name="transcity[]" id="transcity12" data-id="12">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-category1="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control transport" name="transport[]" id="transport12" data-id="12">
                                                <option value="" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="transCategory[]" id="transCategory12" data-id="12">
                                                <option value="" selected>Select Persion</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="transCheckinDate" id="transCheckinDate">
                                        </div>

                                    </div>
                                </div>
                                <div id="cityformContainer13" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control transcity" name="transcity[]" id="transcity13" data-id="13">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-category1="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control transport" name="transport[]" id="transport13" data-id="13">
                                                <option value="" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="transCategory[]" id="transCategory13" data-id="13">
                                                <option value="" selected>Select Persion</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="transCheckinDate" id="transCheckinDate">
                                        </div>

                                    </div>
                                </div>
                                <div id="cityformContainer14" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control transcity" name="transcity[]" id="transcity14" data-id="14">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-category1="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control transport" name="transport[]" id="transport14" data-id="14">
                                                <option value="" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="transCategory[]" id="transCategory14" data-id="14">
                                                <option value="" selected>Select Persion</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="transCheckinDate" id="transCheckinDate">
                                        </div>

                                    </div>
                                </div>
                                <div id="cityformContainer15" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control transcity" name="transcity[]" id="transcity15" data-id="15">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                    if ($result && mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <option value="<?php echo $row['city_id']; ?>" data-custom-category1="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control transport" name="transport[]" id="transport15" data-id="15">
                                                <option value="" selected>Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="transCategory[]" id="transCategory15" data-id="15">
                                                <option value="" selected>Select Persion</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="transCheckinDate" id="transCheckinDate">
                                        </div>

                                    </div>
                                </div>
                                <button type="button" id="transportaddButton" class="btn btn-primary">Add</button>
                                <button type="button" id="transportremoveButton" class="btn btn-danger" style="display:none;">Remove</button>

                                <!-- end transport -->
                                <div id="SightformContainer1" class="d-flex justify-content-center">
                                    <div class="form-rows-container-2 d-flex">
                                    <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control sightcity" name="sightcity[]" id="sightcity1" data-id="1">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" custom-data-item="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="sightseeing[]" id="sightseeing1" data-id="1">
                                                <option value="" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="sightPersion" id="sightPersion">
                                                <option value="" selected>Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="sightCheckinDate" id="sightCheckinDate">
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer2" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-2 d-flex">
                                    <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control sightcity" name="sightcity[]" id="sightcity2" data-id="2">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" custom-data-item="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="sightseeing[]" id="sightseeing2" data-id="2">
                                                <option value="" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="sightPersion" id="sightPersion">
                                                <option value="" selected>Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="sightCheckinDate" id="sightCheckinDate">
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer3" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-2 d-flex">
                                    <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control sightcity" name="sightcity[]" id="sightcity[]" data-id="3">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" custom-data-item="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="sightseeing[]" id="sightseeing3" data-id="3">
                                                <option value="" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="sightPersion" id="sightPersion">
                                                <option value="" selected>Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="sightCheckinDate" id="sightCheckinDate">
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer4" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-2 d-flex">
                                    <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control sightcity" name="sightcity[]" id="sightcity4" data-id="4">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" custom-data-item="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="sightseeing[]" id="sightseeing4" data-id="4">
                                                <option value="" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="sightPersion" id="sightPersion">
                                                <option value="" selected>Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="sightCheckinDate" id="sightCheckinDate">
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer5" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-2 d-flex">
                                    <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control sightcity" name="sightcity[]" id="sightcity5" data-id="5">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" custom-data-item="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="sightseeing[]" id="sightseeing5" data-id="5">
                                                <option value="" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="sightPersion" id="sightPersion">
                                                <option value="" selected>Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="sightCheckinDate" id="sightCheckinDate">
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer6" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-2 d-flex">
                                    <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control sightcity" name="sightcity[]" id="sightcity6" data-id="6">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" custom-data-item="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="sightseeing[]" id="sightseeing6" data-id="6">
                                                <option value="" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="sightPersion" id="sightPersion">
                                                <option value="" selected>Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="sightCheckinDate" id="sightCheckinDate">
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer7" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-2 d-flex">
                                    <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control sightcity" name="sightcity[]" id="sightcity7" data-id="7">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" custom-data-item="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="sightseeing[]" id="sightseeing7" data-id="7">
                                                <option value="" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="sightPersion" id="sightPersion">
                                                <option value="" selected>Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="sightCheckinDate" id="sightCheckinDate">
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer8" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-2 d-flex">
                                    <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control sightcity" name="sightcity[]" id="sightcity8" data-id="8">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" custom-data-item="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="sightseeing[]" id="sightseeing8" data-id="8">
                                                <option value="" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="sightPersion" id="sightPersion">
                                                <option value="" selected>Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="sightCheckinDate" id="sightCheckinDate">
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer9" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-2 d-flex">
                                    <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control sightcity" name="sightcity[]" id="sightcity9" data-id="9">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" custom-data-item="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="sightseeing[]" id="sightseeing9" data-id="9">
                                                <option value="" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="sightPersion" id="sightPersion">
                                                <option value="" selected>Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="sightCheckinDate" id="sightCheckinDate">
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer10" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-2 d-flex">
                                    <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control sightcity" name="sightcity[]" id="sightcity10" data-id="10">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" custom-data-item="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="sightseeing[]" id="sightseeing10" data-id="10">
                                                <option value="" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="sightPersion" id="sightPersion">
                                                <option value="" selected>Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="sightCheckinDate" id="sightCheckinDate">
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer11" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-2 d-flex">
                                    <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control sightcity" name="sightcity[]" id="sightcity11" data-id="11">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" custom-data-item="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="sightseeing[]" id="sightseeing11" data-id="11">
                                                <option value="" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="sightPersion" id="sightPersion">
                                                <option value="" selected>Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="sightCheckinDate" id="sightCheckinDate">
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer12" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-2 d-flex">
                                    <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control sightcity" name="sightcity[]" id="sightcity12" data-id="12">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" custom-data-item="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="sightseeing[]" id="sightseeing12" data-id="12">
                                                <option value="" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="sightPersion" id="sightPersion">
                                                <option value="" selected>Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="sightCheckinDate" id="sightCheckinDate">
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer13" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-2 d-flex">
                                    <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control sightcity" name="sightcity[]" id="sightcity13" data-id="13">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" custom-data-item="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="sightseeing[]" id="sightseeing13" data-id="13">
                                                <option value="" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="sightPersion" id="sightPersion">
                                                <option value="" selected>Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="sightCheckinDate" id="sightCheckinDate">
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer14" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-2 d-flex">
                                    <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control sightcity" name="sightcity[]" id="sightcity14" data-id="14">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" custom-data-item="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="sightseeing[]" id="sightseeing14" data-id="14">
                                                <option value="" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="sightPersion" id="sightPersion">
                                                <option value="" selected>Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="sightCheckinDate" id="sightCheckinDate">
                                        </div>
                                    </div>
                                </div>
                                <div id="SightformContainer15" class="justify-content-center" style="display: none !important;">
                                    <div class="form-rows-container-2 d-flex">
                                    <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT * FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control sightcity" name="sightcity[]" id="sightcity15" data-id="15">
                                                <option value="disabled" selected>Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['city_id']; ?>" custom-data-item="<?php echo $row['city_name']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                    } else {
                                                        echo '<option disabled>No cities found</option>';
                                                    }
                                                    mysqli_free_result($result);
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="sightseeing[]" id="sightseeing15" data-id="15">
                                                <option value="" selected>Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="sightPersion" id="sightPersion">
                                                <option value="" selected>Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="sightCheckinDate" id="sightCheckinDate">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="SightaddButton" class="btn btn-primary">Add</button>
                                <button type="button" id="SightremoveButton" class="btn btn-danger" style="display:none;">Remove</button>
                            </div>
                            <button type="button" class="btn btn-sm btn-block btn-primary" id="fetchDataButton">Calculate</button>
                        </form>
                        <form action="insert_data.php" method="post">
                            <!-- main div close -->
                            <table>
                                <tr class="">
                                    <th>Remarks:</th>
                                    <!-- <td><input type="text" name="remarks"> -->
                                    <input type="hidden" name="customer_name" id="dname"/>
                                    <input type="hidden" name="email" id="demail"/>
                                    <input type="hidden" name="phone" id="dphone"/>
                                    <input type="hidden" name="pax" id="dpax"/>
                                    <input type="hidden" name="custdate" id="custdate1" />
                                    <input type="hidden" name="randomNumber11" id="drand" placeholder="randomnumber"/>
                                    <input type="hidden" name="package_inr1" id="totalSumDisplay"/>

                                    <input type="hidden" name="inrperpersion" id="inrperpersion1" />
                                    <input type="hidden" name="account_id" value="<?php echo $_SESSION['userEmail']; ?>"/>

                                </span></td>
                                </tr>
                                <tr>
                                    <th>Total THB:</th>
                                        <td><input type="text" name="package_inr" id="totalthb"/></div></td>
                                </tr>
                                <tr>
                                    <th>THB TO INR Rate:</th>
                                    <td><input type="text" name="thbtoinr" value="2.7" /></td>
                                </tr>
                                <tr>
                                    <th>Srvice per person INR Rate:</th>
                                    <td><input type="text" name="inrperpersion" id="inrperpersion" /></td>
                                </tr>
                                <tr>
                                    <th>Total INR:</th>
                                    <td><input type="text" name="total" id="totalSumDisplay1" /></td>

                                </tr>
                            </table>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- End No Labels Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<?php include "footer.php"?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        let currentVisible = 1; // First form is already visible

        $('#addButtonmain').click(function() {
            // alert('1');
            if (currentVisible < 15) {
                currentVisible++; // Increment to show the next form container
                $('#formContainer' + currentVisible).show(); // Show the next form container
                $('#removeButton').show();
            }
            if (currentVisible === 15) {
                $('#addButtonmain').hide();
            }
        });

        $('#removeButton').click(function() {
            if (currentVisible > 1) {
                var nextFormContainer = document.getElementById('formContainer' + currentVisible);
                nextFormContainer.style.display = ''; // Remove the display:flex style
                nextFormContainer.style.display = 'none'; // Hide the next form container
                currentVisible--;
            }
            if (currentVisible === 1) {
                $('#removeButton').hide(); // Hide the remove button if back to the first form
            }
            if (currentVisible < 15) {
                $('#addButtonmain').show(); // Show the add button again if not all forms are visible
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        let currentVisible = 1; // First form is already visible

        $('#transportaddButton').click(function() {
            // alert('1');
            if (currentVisible < 15) {
                currentVisible++; // Increment to show the next form container
                $('#cityformContainer' + currentVisible).show(); // Show the next form container
                $('#transportremoveButton').show();
            }
            if (currentVisible === 15) {
                $('#transportaddButton').hide();
            }
        });

        $('#transportremoveButton').click(function() {
            if (currentVisible > 1) {
                var nextFormContainer = document.getElementById('cityformContainer' + currentVisible);
                nextFormContainer.style.display = ''; // Remove the display:flex style
                nextFormContainer.style.display = 'none'; // Hide the next form container
                currentVisible--;
            }
            if (currentVisible === 1) {
                $('#transportremoveButton').hide(); // Hide the remove button if back to the first form
            }
            if (currentVisible < 15) {
                $('#transportaddButton').show(); // Show the add button again if not all forms are visible
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        let currentVisible = 1; // First form is already visible

        $('#SightaddButton').click(function() {
            // alert('1');
            if (currentVisible < 15) {
                currentVisible++; // Increment to show the next form container
                $('#SightformContainer' + currentVisible).show(); // Show the next form container
                $('#SightremoveButton').show();
            }
            if (currentVisible === 15) {
                $('#SightaddButton').hide();
            }
        });

        $('#SightremoveButton').click(function() {
            if (currentVisible > 1) {
                var nextFormContainer = document.getElementById('SightformContainer' + currentVisible);
                nextFormContainer.style.display = ''; // Remove the display:flex style
                nextFormContainer.style.display = 'none'; // Hide the next form container
                currentVisible--;
            }
            if (currentVisible === 1) {
                $('#SightremoveButton').hide(); // Hide the remove button if back to the first form
            }
            if (currentVisible < 15) {
                $('#SightaddButton').show(); // Show the add button again if not all forms are visible
            }
        });
    });
</script>
<script>
    function validateForm() {
            var name = document.getElementById("name").value.trim();
            var email = document.getElementById("email").value.trim();
            var phone = document.getElementById("phone").value.trim();
            var date = document.getElementById("custdate").value.trim();
            var numPersons = document.getElementById("pax").value.trim();
            // Reset error messages
            document.getElementById("nameError").textContent = "";
            document.getElementById("emailError").textContent = "";
            document.getElementById("phoneError").textContent = "";
            document.getElementById("dateError").textContent = "";
            document.getElementById("personsError").textContent = "";

            // Check name
            if (name === "") {
                document.getElementById("nameError").textContent = "Please enter a name.";
                return false;
            }

            // Check email
            if (email === "") {
                document.getElementById("emailError").textContent = "Please enter an email address.";
                return false;
            }

            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                document.getElementById("emailError").textContent = "Please enter a valid email address.";
                return false;
            }

            // Check phone
            if (phone === "") {
                document.getElementById("phoneError").textContent = "Please enter a phone number.";
                return false;
            }

            var phonePattern = /^\d{10}$/;
            if (!phonePattern.test(phone)) {
                document.getElementById("phoneError").textContent = "Please enter a valid 10-digit phone number.";
                return false;
            }

            // Check date
            if (date === "") {
                document.getElementById("dateError").textContent = "Please select a booking date.";
                return false;
            }

            // Check number of persons
            if (numPersons === "") {
                document.getElementById("personsError").textContent = "Please enter the number of persons.";
                return false;
            }

            var numPattern = /^\d+$/;
            if (!numPattern.test(numPersons)) {
                document.getElementById("personsError").textContent = "Please enter a valid number.";
                return false;
            }

            // Form passed all validation checks
            return true;
    }
    let totalSum = 0;
    let allTotalSum = 0;
    // Function to calculate and store data in array format for sightseeing form
    let sightseeingDataArray = [];
    function calculateSightseeingData(randomNumber) {
        // let sightseeingDataArray = []; // Initialize an empty array to store form data
        var totalData = { totalPrice: 0 };
        // Get all form rows for sightseeing
        var formRows = document.querySelectorAll('.form-rows-container-2');
        // Iterate over each form row
        formRows.forEach(function(row) {
            var selectElement5 = document.getElementById("sightcity");
            var selectedOption5 = selectElement5.options[selectElement5.selectedIndex];
            var sightCity = selectedOption5.getAttribute("custom-data-item");
            console.log("customAttributeValuesightCity",sightCity);

            var selectElement6 = document.getElementById("sightseeing");
            var selectedOption6 = selectElement6.options[selectElement6.selectedIndex];
            var sightseeing = selectedOption6.getAttribute("custom-data-item1");
            console.log("customAttributeValuesightseeing",sightseeing);
            // var sightCity = row.querySelector('#sightcity').value;
            var sightseeing1 = row.querySelector('#sightseeing').value;
            var sightPersion = row.querySelector('#sightPersion').value;
            var sightCheckinDate = row.querySelector('#sightCheckinDate').value;
            var rands = randomNumber;
            var totalPrice = sightseeing1 * sightPersion;
            // Create an object with the extracted data
            var formData = {
                sightCity: sightCity,
                sightseeing: sightseeing,
                sightPersion: sightPersion,
                totalPrice: totalPrice,
                sightCheckinDate: sightCheckinDate,
                rands:rands,
            };

            // Push the formData object to the sightseeingDataArray
            sightseeingDataArray.push(formData);
            totalData.totalPrice += totalPrice;
        });

        totalSum += totalData.totalPrice;
        // Output the array for demonstration (you can modify this as per your requirement)
        console.log(sightseeingDataArray);
        console.log(totalData);
        return sightseeingDataArray;
    }
    // Function to calculate data
    let formDataArray1 = [];
    function calculateData1(randomNumber) {
        // console.log("1random",randomNumber);
        // Clear the formDataArray before populating it again
        // let formDataArray1 = [];
        var totalData = { totalPrice: 0 };

        // Get all form rows
        var formRows = document.querySelectorAll('.form-rows-container-1');

        // Iterate over each form row
            formRows.forEach(function(row) {

                var selectElement3 = document.getElementById("transcity");
                var selectedOption3 = selectElement3.options[selectElement3.selectedIndex];
                var city = selectedOption3.getAttribute("data-custom-category1");
                console.log("customAttributeValuehotel",city);

                var selectElement4 = document.getElementById("transport");
                var selectedOption4 = selectElement4.options[selectElement4.selectedIndex];
                var transport = selectedOption4.getAttribute("data-custom-category2");
                console.log("customAttributeValuehotel",transport);
                // var city = row.querySelector('#transcity').value;
                // var transport = row.querySelector('#transport').value;
                // alert(transport);
                var persion = row.querySelector('#transCategory').value;
                var rand1 = randomNumber;
                // alert(persion);
                const temp = 1;
                var transCheckinDate = row.querySelector('#transCheckinDate').value;
                var totalPrice = temp * persion;
                // Create an object with the extracted data
                var formData = {
                    city: city,
                    transport: transport,
                    persion: persion,
                    totalPrice: totalPrice,
                    transCheckinDate: transCheckinDate,
                    rand1:rand1
                };

            // Push the formData object to the formDataArray
            formDataArray1.push(formData);
            totalData.totalPrice += totalPrice;
            });
            totalSum += totalData.totalPrice;
            // Output the array for demonstration (you can modify this as per your requirement)
            console.log("All data:", formDataArray1);
            console.log("Total data:", totalData);
            return formDataArray1;
            // console.log("datada",formDataArray1);
    }
    // Function to calculate and store data in array format
    // var formDataArray=[];
    let formDataArray = [];
    function calculateData(randomNumber) {
        // let formDataArray = []; // Initialize an empty array to store form data
        var totalData = { totalPrice: 0 }; // Initialize total data object
        // console.log("tghfhkjh",randomNumber);
        // Get all form rows
        var formRows = document.querySelectorAll('.form-rows-container');

        // // Iterate over each form row
        // formRows.forEach(function(row) {
            // Get the select element
            for (var i = 1; i <= 15; i++) {
                var city = document.getElementById("city" + i).getAttribute("data-custom-attribute");
                var hotel = document.getElementById("hotel" + i).getAttribute("data-custom-attribute1");
                var category = document.getElementById("category" + i).getAttribute("data-custom-category");
                var room = document.getElementById("room" + i).value;
                var night = document.getElementById("night" + i).value;
                var adult = document.getElementById("adult" + i).value;
                var hotelCheckinDate = document.getElementById("hotelCheckinDate" + i).value;
                var rand = randomNumber;

                // Calculate total price for each set
                var totalPrice = category * room * night;

                // Create an object with the extracted data
                var formData = {
                    city: city,
                    hotel: hotel,
                    category: category,
                    room: room,
                    night: night,
                    adult: adult,
                    hotelCheckinDate: hotelCheckinDate,
                    totalPrice: totalPrice,
                    rand: rand
                };

                // Push the formData object to the formDataArray
                formDataArray.push(formData);

                // Accumulate total price
                totalSum += totalPrice;
            }

            // Output the array for demonstration (you can modify this as per your requirement)
            console.log("All:", formDataArray);
            console.log("Total:", totalSum); // Log total price
        // });

        // Output the array for demonstration (you can modify this as per your requirement)
        console.log("All:",formDataArray);
        console.log("Total:",totalData); // Log total data

        // Return total data if needed
        totalSum += totalData.totalPrice;
        return formDataArray;
    }

    // Function to send data to PHP script
    function sendDataToPHP(formDataArray) {

        // console.log(formDataArray);
        var xhr = new XMLHttpRequest();
        var url = "store_data.php";
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText); // Log the response from PHP
            }
        };
        var data = JSON.stringify({formDataArray: formDataArray}); // Wrap formDataArray in an object
        xhr.send(data);
    }

    function sendDataToPHP1(formDataArray1) {

        var xhr = new XMLHttpRequest();
        var url = "store_data1.php";
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText); // Log the response from PHP
            }
        };
        var data = JSON.stringify({formDataArray1: formDataArray1}); // Wrap formDataArray in an object
        xhr.send(data);
    }

    function sendDataToPHP2(sightseeingDataArray) {

        var xhr = new XMLHttpRequest();
        var url = "store_data2.php";
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText); // Log the response from PHP
            }
        };
        var data = JSON.stringify({sightseeingDataArray: sightseeingDataArray}); // Wrap formDataArray in an object
        xhr.send(data);
    }
    // Event listener for the "Add" button click
    document.getElementById('fetchDataButton').addEventListener('click', function() {
        if (validateForm()) {
                alert("Form submitted successfully.");
                this.style.display = 'none';
                var name = document.getElementById('name').value;
                var email = document.getElementById('email').value;
                var phone = document.getElementById('phone').value;
                var custdate = document.getElementById('custdate').value;
                var pax = document.getElementById('pax').value;

                document.getElementById('dname').value = name;

                document.getElementById('demail').value = email;
                document.getElementById('dphone').value = phone;
                document.getElementById('custdate1').value = custdate;
                document.getElementById('dpax').value = pax;
                var randomNum = Math.floor(Math.random() * 1000000);
                var randomNumber = "BCT" + randomNum;
                document.getElementById('drand').value = randomNumber;
                calculateData(randomNumber); // Call the function to calculate and store data
                // console.log(formDataArray);
                sendDataToPHP(formDataArray);
                calculateData1(randomNumber);
                console.log("wqertyiu",formDataArray);
                sendDataToPHP1(formDataArray1);


                calculateSightseeingData(randomNumber);
                sendDataToPHP2(sightseeingDataArray);
                console.log("wqertyiu",sightseeingDataArray);
                // allTotalSum += totalSum;
                var thb = totalSum/2.7;
                var thbTotalFormatted = thb.toFixed(2);
                var inrPer = Number(totalSum)/Number(pax);
                document.getElementById('totalSumDisplay').value = totalSum;
                document.getElementById('totalSumDisplay1').value = totalSum;
                document.getElementById('totalthb').value = thbTotalFormatted;
                document.getElementById('inrperpersion').value = inrPer;
                document.getElementById('inrperpersion1').value = inrPer;
            } else {
                alert("Form submission failed due to validation errors.");
            }
    // console.log(formDataArray);
    // sendDataToPHP(formDataArray);
    });
</script>
<script>
    //date
    $(document).ready(function() {
        $('.date-input').change(function() {
            var selectedDate = $(this).val();
            $('.checkin-date').val(selectedDate);
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $(".city").change(function(){
            var city_id =$(this).val();
            var data_id = $(this).attr('data-id');
            hotel_id = $('#hotel'+data_id).val(); 
            getHotelList(city_id,data_id,hotel_id);
        });
        function getHotelList(city_id, data_id, hotel_id) {
            $.ajax({
                url: "hotel.php",
                type: "POST",
                data: {
                    city_id: city_id,
                    data_id: data_id,
                },
                cache: false,
                success: function(result) {
                    $("#hotel" + data_id).html(result);
                }
            });
        }
        $(".hotel").change(function(){
            var hotel_id = $(this).val();
            var hotel_data_id=$(this).attr('data-id');
            var category =$('#category'+hotel_data_id).val();
            getRoomCategoryList(hotel_id,hotel_data_id,category);  
        });
        function getRoomCategoryList(hotel_id,hotel_data_id,category){
            $.ajax({
                url: "category.php",
                type:"POST",
                data:{
                    hotel_id:hotel_id
                },
                cache: false,
                success:function(result){
                    $("#category" + hotel_data_id).html(result);
                }
            });
        }

        $(".transcity").change(function(){
            var city_id=$(this).val();
            var data_id =$(this).attr('data-id');
            getTransportList(city_id,data_id);
        });

        function getTransportList(city_id,data_id){
            // alert(city_id);
            $.ajax({
                url: "trans.php",
                type:"POST",
                data:{
                    city_id:city_id
                },
                cache: false,
                success:function(result){
                    $("#transport"+ data_id).html(result);
                }
            });
        }

        $(".transport").change(function(){
            var trans_id = this.value;
            var data_id =$(this).attr('data-id');
            // alert(data_id);
            $.ajax({
                url: "transcategory.php",
                type:"POST",
                data:{
                    trans_id:trans_id
                },
                cache: false,
                success:function(result){
                    $("#transCategory"+ data_id).html(result);
                    // $("#city").html(<option value="">Select State</option>)
                }
            });
        });

        $(".sightcity").change(function(){
            var city_id = this.value;
            var data_id =$(this).attr('data-id');
            // alert(city_id);
            $.ajax({
                url: "sightseeing.php",
                type:"POST",
                data:{
                    city_id:city_id
                },
                cache: false,
                success:function(result){
                    $("#sightseeing" + data_id).html(result);
                    // $("#city").html(<option value="">Select State</option>)
                }
            });
        });

    });
</script>