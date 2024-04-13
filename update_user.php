<?php
// Include the database connection file
include("connection.php");

// Function to sanitize input data
function sanitizeData($data)
{
    global $db;
    return mysqli_real_escape_string($db, htmlspecialchars(strip_tags(trim($data))));
}

// Check if the update user form is submitted
if (isset($_POST['update_user'])) {
    // Sanitize input data
    $user_id = sanitizeData($_POST['user_id']);
    $username = sanitizeData($_POST['username']);
    $email = sanitizeData($_POST['email']);
    $address = sanitizeData($_POST['address']);
    $user_type = sanitizeData($_POST['user_type']);

    // Update user data in the database
    $query = "UPDATE users SET username = '$username', email = '$email', address = '$address', user_type = '$user_type' WHERE id = '$user_id'";
    $result = mysqli_query($db, $query);

    if ($result) {
        // User updated successfully, redirect to manage users page or display a success message
        header("Location: manageUsers.php");
        exit(); // Stop further execution
    } else {
        // Error updating user, redirect to manage users page or display an error message
        header("Location: manageUsers.php");
        exit(); // Stop further execution
    }
} else {
    // If update form is not submitted, redirect to manage users page
    header("Location: manageUsers.php");
    exit(); // Stop further execution
}
?>
