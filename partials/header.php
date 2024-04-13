<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Initialize variables
$loginLink = '';
$registerLink = '';
$logoutLink = '';
$navlinks = '  <!--NAVIGATION START-->
<nav>
    <ul>
        <li><a href="./index.php">Home</a></li>
        <li><a href="./recipes.php">Recipes</a></li>
        <li><a href="./chefs.php">Chefs</a></li>
        <li><a href="./blog.php">Blog</a></li>
        <li><a href="./aboutUs.php">About Us</a></li>
    </ul>
</nav>
<!--NAVIGATION END-->';
$bannerimage = ' <img src="Assets/Images/food banner.jpg" alt="Food Banner" id="food-banner">';

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $isloggedIn = $user_id;

   
    $registerLink = $isloggedIn ? '<button id="register-button"><a href="uploadpage.php">Add</a></button>' : '';
    $logoutLink = $isloggedIn ? '<button id="login-button"><a href="./logout.php">Logout</a></li>' : '';
} else {
    // User is not logged in, so display login and register links
    $loginLink = '<button id="login-button"><a href="login.php">Login</a></button>';
    $registerLink = '<button id="register-button"><a href="register.php">Register</a></button>';
}
?>



<!--HEADER START-->
<header>
    <!--Logo Image-->
   <!-- <img src="Assets/Images/imglogo.png" alt="Pot Belly Ghana logo" id="logo">-->
    <a href="index.php"><img src="Assets/Images/imglogo.png" alt="logo" id="logo"></a>




     
    <?php echo $loginLink; ?>
    <?php echo $logoutLink; ?>
    <?php echo $registerLink; ?> 
   
    <!-- <button id="register-button"><a href="register.php">Register</a></button> -->
    <input type="search" placeholder="Search chefs or recipes" id="search-field">
   

<!--NAVIGATION START-->
    <nav>
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./recipes.php">Recipes</a></li>
            <li><a href="./chefs.php">Chefs</a></li>
            <li><a href="./blog.php">Blog</a></li>
            <li><a href="./aboutUs.php">About Us</a></li>
        </ul>
    </nav>
    <!--NAVIGATION END-->

    <!--Banner Image-->
    <img src="Assets/Images/food banner.jpg" alt="Food Banner" id="food-banner">

    <!-- <button id="login-button"><a href="login.php">Login</a></button> -->
    
</header>
