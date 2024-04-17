<?php
// Include your database connection file here
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_status_btn'])) {
    // Retrieve customer ID and new status from form submission
    $customer_id = $_POST['customer_id'];
    $new_status = $_POST['status'];
    
    // Update the status in the database
    $update_query = "UPDATE `thailand_customers` SET `status`='$new_status' WHERE `customer_id`='$customer_id'";
    $result = mysqli_query($conn, $update_query);
    
    if ($result) {
        // Status updated successfully
        // Redirect back to the page where the form was submitted from
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit();
    } else {
        // Error updating status
        echo "Error updating status: " . mysqli_error($conn);
    }
} else {
    // Redirect to form page if accessed directly without form submission
    header("Location: form.php");
    exit();
}
?>
