<?php
// Include the database connection file
include("connection.php");

// Function to sanitize input data
function sanitizeData($data)
{
    global $db;
    return mysqli_real_escape_string($db, htmlspecialchars(strip_tags(trim($data))));
}

// Function to add a new user
function addUser($username, $email, $address, $password, $user_type)
{
    global $db;

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $query = "INSERT INTO users (username, email, address, password, user_type) VALUES ('$username', '$email', '$address', '$hashedPassword', '$user_type')";
    $result = mysqli_query($db, $query);

    return $result;
}

// Function to delete a user
function deleteUser($user_id)
{
    global $db;

    // Delete user from the database
    $query = "DELETE FROM users WHERE id = '$user_id'";
    $result = mysqli_query($db, $query);

    return $result;
}

// Fetch all users from the database
$query = "SELECT * FROM users";
$result = mysqli_query($db, $query);

// Initialize an empty variable to store the user table HTML
$userTableHTML = '';

// Check if there are any users
if (mysqli_num_rows($result) > 0) {
    // Start building the user table HTML
    $userTableHTML .= '<table>';
    $userTableHTML .= '<tr><th>User ID</th><th>Username</th><th>Email</th><th>Address</th><th>User Type</th><th>Action</th></tr>';

    // Loop through each user and add them to the table
    while ($row = mysqli_fetch_assoc($result)) {
        $userTableHTML .= '<tr>';
        $userTableHTML .= '<td>' . $row['id'] . '</td>';
        $userTableHTML .= '<td>' . $row['username'] . '</td>';
        $userTableHTML .= '<td>' . $row['email'] . '</td>';
        $userTableHTML .= '<td>' . $row['address'] . '</td>';
        $userTableHTML .= '<td>' . $row['user_type'] . '</td>';
        $userTableHTML .= '<td>
                            <form method="post" action="">
                                <input type="hidden" name="user_id" value="' . $row['id'] . '">
                                <input type="submit" name="edit_user" value="Edit">
                                <input type="submit" name="delete_user" value="Delete">
                            </form>
                        </td>';
        $userTableHTML .= '</tr>';
    }

    $userTableHTML .= '</table>';
} else {
    // No users found message
    $userTableHTML = '<p>No users found.</p>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="Assets/CSS/manageUsers.css"> 
</head>
<body>
    <div id="content">
        <!--HEADER START-->
        <?php include "./partials/header.php" ?> 
        <!--HEADER END-->
        
        <!--MAIN START-->
        <main>
            <!--Main Section start-->
            <h2>Manage Users</h2>
            <div class="user-table">
                <?php echo $userTableHTML; ?>
            </div>
            <div class="add-user-form">
                <h3>Add User</h3>
                <form method="post" action="">
                    <table>
                        <tr>
                            <td><label for="username">Username:</label></td>
                            <td><input type="text" name="username" required></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email:</label></td>
                            <td><input type="email" name="email" required></td>
                        </tr>
                        <tr>
                            <td><label for="address">Address:</label></td>
                            <td><input type="text" name="address" required></td>
                        </tr>
                        <tr>
                            <td><label for="password">Password:</label></td>
                            <td><input type="password" name="password" required></td>
                        </tr>
                        <tr>
                            <td><label for="conpassword">Confirm Password:</label></td>
                            <td><input type="password" name="conpassword" required></td>
                        </tr>
                        <tr>
                            <td><label for="user_type">User Type:</label></td>
                            <td>
                                <select name="user_type" required>
                                    <option value="recipe_seeker">Recipe Seeker</option>
                                    <option value="chef">Chef</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="add_user" value="Add User"></td>
                        </tr>
                    </table>
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
