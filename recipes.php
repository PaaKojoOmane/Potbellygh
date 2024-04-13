<?php

include("./connection.php");



$recipes_sql = "SELECT * FROM recipepage";
$result = mysqli_query($db, $recipes_sql);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Recipes page</title>
    <link rel="stylesheet" href="Assets/CSS/recipesstyle.css">
</head>

<body>

    <div id="content">
        <!--HEADER START-->
        <?php include "./partials/header.php" ?>
        <!--HEADER END-->
        <!--MAIN START-->
        <?php
            if ($result && mysqli_num_rows($result) > 0) {
                while ($recipe = mysqli_fetch_assoc($result)) {
                    echo '<a href="./recipePage.php?recipeName=' . urlencode($recipe["recipeName"]) . '" id="recipessection-' . $recipe["id"] . '"><section>';
                    echo '<h2>' . $recipe["recipeName"] . '</h2>';
                    echo '<img src="Assets/Images/recipe/beans and plantain 2.jpg" alt="recipe-2" id="recipe-2">';
                    // echo '<img src="Assets/Images/recipe/' . $recipe["recipeName"] . '.jpg" alt="' . $recipe["recipeName"] . '" id="recipe-' . $recipe["id"] . '">'; 
                    echo '<p>' . $recipe["category"] . '</p>'; 
                    echo '</section></a>';
                }
            } else {
                echo "No recipes found";
            }
        ?>

       <!-- <a href="#"id="recipessection-2" > <section >
            <h2>Recipe 2</h2>
            <img src="Assets/Images/recipe/beans and plantain 2.jpg" alt="recipe-2" id="recipe-2"> 
            <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p> 
        </section></a>

        <a href="#" id="recipessection-3"><section >
             <h2>Recipe 3</h2> 
             <img src="Assets/Images/recipe/yam 2.jpg" alt="recipe-3" id="recipe-3"> 
             <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p> 
        </section></a>

        <a href="#" id="recipessection-4" ><section >
             <h2>Recipe 4</h2>
             <img src="Assets/Images/recipe/fufu" alt="recipe-4" id="recipe-4"> 
             <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p> 
        </section></a>

        <a href="#" id="recipessection-5" ><section >
            <h2>Recipe 5</h2>
            <img src="Assets/Images/recipe/Tuo Zaafi" alt="recipe-5" id="recipe-5"> 
            <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p> 
        </section></a>

        <a href="#" id="recipessection-6"><section >
            <h2>Recipe 6</h2>
            <img src="Assets/Images/recipe/Fanti_Kenkey_and_fish.jpg" alt="recipe-6" id="recipe-6"> 
            <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p> 
        </section></a> -->
        
            <ul>
                <li><a href="">More</a></li>
            </ul>
        
        

        <!--MAIN END-->
        <!--<section><h2>Trending Recipes</h2>
            <img src="Assets/Images/jollof.jpg" alt="Jollof" id="jollof-image">
            <p>Jollof</p>

        </section>
        <aside>
            <img src="Assets/Images/friedrice.jpg" alt="friedrice" id="fried-rice">
            <p>Fried Rice</p>
        </aside>-->

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