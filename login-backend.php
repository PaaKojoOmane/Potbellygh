<?php
session_start();
include("connection.php"); // Establish connection with the database

if (empty($_POST["email"]) || empty($_POST["password"])) {
    echo "Both fields are required.";
} else {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_type'] = $row['user_type'];
        
        if ($row['user_type'] == 'chef') {
            header("location: index.php"); // Redirect chef to their dashboard
        } elseif ($row['user_type'] == 'admin') {
            header("location: adminpanel.php"); // Redirect admin to admin panel
        } else {
            header("location: recipes.php"); // Redirect recipe seeker to recipes page
        }
    } else {
        echo "Incorrect email or password.";
    }
}
?>


