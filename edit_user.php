<?php
// Include the database connection file
include("connection.php");

// Function to sanitize input data
function sanitizeData($data)
{
    global $db;
    return mysqli_real_escape_string($db, htmlspecialchars(strip_tags(trim($data))));
}

// Check if the edit user form is submitted
if (isset($_POST['edit_user'])) {
    // Sanitize user ID
    $user_id = sanitizeData($_POST['user_id']);

    // Fetch user details from the database based on user ID
    $query = "SELECT * FROM users WHERE id = '$user_id'";
    $result = mysqli_query($db, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    } else {
        // User not found, redirect to manage users page or display an error message
        header("Location: manageUsers.php");
        exit(); // Stop further execution
    }
} else {
    // If edit form is not submitted, redirect to manage users page
    header("Location: manageUsers.php");
    exit(); // Stop further execution
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="Assets/CSS/editUser.css">
</head>
<body>
    <div id="content">
        <!--HEADER START-->
        <?php include "./partials/header.php" ?> 
        <!--HEADER END-->
        
        <!--MAIN START-->
        <main>
            <!--Main Section start-->
            <h2>Edit User</h2>
            <div class="edit-user-form">
                <form method="post" action="update_user.php">
                    <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                    <label for="username">Username:</label>
                    <input type="text" name="username" value="<?php echo $user['username']; ?>" required><br>

                    <label for="email">Email:</label>
                    <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>

                    <label for="address">Address:</label>
                    <input type="text" name="address" value="<?php echo $user['address']; ?>" required><br>

                    <label for="user_type">User Type:</label>
                    <select name="user_type" required>
                        <option value="recipe_seeker" <?php if ($user['user_type'] === 'recipe_seeker') echo 'selected'; ?>>Recipe Seeker</option>
                        <option value="chef" <?php if ($user['user_type'] === 'chef') echo 'selected'; ?>>Chef</option>
                        <option value="admin" <?php if ($user['user_type'] === 'admin') echo 'selected'; ?>>Admin</option>
                    </select><br>

                    <input type="submit" name="update_user" value="Update User">
                </form>
            </div>
        </main>
        <!--MAIN END-->

        <!--FOOTER START-->
        <footer>
            <div class="footer-one">
                <h2>Pot Belly Ghana</h2>
                <h5>Find Delicious Recipes from Around the world</h5>
                <h5>Pot Belly Ghana</h5>

                <div class="socials">
                    <h4>Stay Connected with Us</h4>
                    <ion-icon name="logo-facebook"></ion-icon>
                    <ion-icon name="logo-twitter"></ion-icon>
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-linkedin"></ion-icon>
                </div>
            </div>

            <div class="footer-two">
                <h5>Pricing</h5>
                <h5>Location</h5>
                <h5>In the press</h5>
            </div>


        </footer>
        <!--FOOTER END-->
    </div>
</body>
</html>
