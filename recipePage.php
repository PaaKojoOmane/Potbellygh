<?php 

include("./connection.php");

if (isset($_GET["recipeName"])) {
    $recipe_name = $_GET["recipeName"];

    // Use prepared statement to prevent SQL injection
    $recipes_sql = "SELECT * FROM recipepage WHERE recipename = ?";
    $stmt = mysqli_prepare($db, $recipes_sql);
    mysqli_stmt_bind_param($stmt, "s", $recipe_name);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if any row is returned
    if (mysqli_num_rows($result) > 0) {
        // Fetch the row as an associative array
        $row = mysqli_fetch_assoc($result);
        // Access individual columns by keys
        $recipeName = $row['recipeName'];
        $category = $row['category'];
        $ingredient = $row['ingredient'];
        $instructions = $row['instructions'];

        // You can now use these variables to display the recipe details in your HTML
    } else {
        // Handle case where no recipe with the provided name is found
        echo "Recipe not found!";
    }
} else {
    // Handle case where recipeName is not set in the URL parameters
    echo "Recipe name not provided!";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Page</title>
    <link rel="stylesheet" href="Assets/CSS/recipepage.css">
</head>

<?php $result ?>

<body>
    <div id="content">
        <!--HEADER START-->
        <?php include"./partials/header.php" ?>
        <!--HEADER END-->
        <!--MAIN START-->
        <main>
            <!--Main Section start-->
            <h2><?php echo $recipeName; ?></h2>
            <img src="Assets/Images/recipe/Banku_with_grilled_tilapia_and_pepper.jpg" alt="Blog post image" id="Blog-image">
            <!--<img src="Assets/recipe/Banku_with_grilled_tilapia_and_pepper.jpg" alt="Blog post image" id="Blog-image">-->
            <h3>Category:<?php echo $category; ?></h3>
            <h3>Ingredients: <?php echo $ingredient; ?></h3>
            <h3>Instructions</h3>
            <p><?php echo $instructions; ?></p>
        </main>
        <!--MAIN END-->

        <!--<section id="recipessection-1">
            Section start
            <h2>Recipe 1</h2>
            <img src="Assets/Images/recipe/Banku_with_grilled_tilapia_and_pepper.jpg" alt="recipe-1" id="recipe-1"> 
            <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p> 
        </section>

        <section id="recipessection-2">
            <h2>Recipe 2</h2>
            <img src="Assets/Images/recipe/beans and plantain 2.jpg" alt="recipe-2" id="recipe-2"> 
            <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p> 
        </section>

        <section id="recipessection-3">
             <h2>Recipe 3</h2> 
             <img src="Assets/Images/recipe/yam 2.jpg" alt="recipe-3" id="recipe-3"> 
             <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p> 
        </section>

        <section id="recipessection-4">
             <h2>Recipe 4</h2>
             <img src="Assets/Images/recipe/fufu" alt="recipe-4" id="recipe-4"> 
             <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p> 
        </section>

        <section id="recipessection-5">
            <h2>Recipe 5</h2>
            <img src="Assets/Images/recipe/Tuo Zaafi" alt="recipe-5" id="recipe-5"> 
            <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p> 
        </section>

        <section id="recipessection-6">
            <h2>Recipe 6</h2>
            <img src="Assets/Images/recipe/Fanti_Kenkey_and_fish.jpg" alt="recipe-6" id="recipe-6"> 
            <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p> 
        </section>-->
        

       
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

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>