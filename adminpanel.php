<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="Assets/CSS/adminpanel.css">
</head>
<body>
    <div id="content">
        <!--HEADER START-->
        <?php include "./partials/header.php" ?> 
        <!--HEADER END-->
        
        <!--MAIN START-->
        <main>
            <!--Main Section start-->
            <h2>Admin Panel</h2>
            <div class="admin-options">
                <a href="uploadpage.php" class="admin-option">Add Recipe</a>
                <a href="manageUsers.php" class="admin-option">Manage Users</a>
                <a href="manage_recipes.php" class="admin-option">Manage Recipes</a>
                <!-- Add more admin options as needed -->
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

    <!-- Ionicons Script -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

