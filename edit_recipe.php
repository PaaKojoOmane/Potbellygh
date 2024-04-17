<?php
session_start();
include('connection.php');

// Check if recipe ID is provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: manage_recipes.php");
    exit();
}

// Get recipe ID from URL parameter
$recipeId = $_GET['id'];

// Fetch recipe details from the database
$sql = "SELECT * FROM recipepage WHERE id = $recipeId";
$result = mysqli_query($db, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $recipe = mysqli_fetch_assoc($result);
} else {
    // Recipe not found
    header("Location: manage_recipes.php");
    exit();
}

// Handle form submission for updating recipe
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $recipeName = $_POST['recipeName'];
    $category = $_POST['category'];
    $ingredient = $_POST['ingredient'];
    $instructions = $_POST['instructions'];

    // Update recipe in the database
    $sql = "UPDATE recipepage SET recipeName = '$recipeName', category = '$category', ingredient = '$ingredient', instructions = '$instructions' WHERE id = $recipeId";
    $result = mysqli_query($db, $sql);

    if ($result) {
        // Recipe updated successfully
        header("Location: manage_recipes.php");
        exit();
    } else {
        // Error updating recipe
        $error = "Error updating recipe.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Recipe - Admin Panel</title>
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
            <h2>Edit Recipe</h2>
            <div class="admin-form">
                <form action="" method="post">
                    <label for="recipeName">Recipe Name:</label>
                    <input type="text" id="recipeName" name="recipeName" value="<?php echo $recipe['recipeName']; ?>">
                    
                    <label for="category">Category:</label>
                    <input type="text" id="category" name="category" value="<?php echo $recipe['category']; ?>">
                    
                    <label for="ingredient">Ingredient:</label>
                    <textarea id="ingredient" name="ingredient"><?php echo $recipe['ingredient']; ?></textarea>
                    
                    <label for="instructions">Instructions:</label>
                    <textarea id="instructions" name="instructions"><?php echo $recipe['instructions']; ?></textarea>
                    
                    <button type="submit">Update Recipe</button>
                </form>
                <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
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
