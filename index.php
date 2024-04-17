<?php

// START A SESSION

session_start();
//print_r($_SESSION) 

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Assets/CSS/style.css">
</head>

<body>
    <div id="content">
        <!--HEADER START-->
        <?php
        include "./partials/header.php" ?> 
        <!--HEADER END-->
        <!--MAIN START-->
        <main>
            <!--Main Section start-->
            <?php
            if (isset($_SESSION['user_id']) && $_SESSION['user_type'] == 'chef') {
                // Display edit and delete buttons for recipes if $recipe is set
                if (isset($recipe)) {
                    echo "<a href='edit_recipe.php?id={$recipe['id']}' class='edit-button'>Edit Recipe</a>";
                    echo "<a href='delete_recipe.php?id={$recipe['id']}' class='delete-button'>Delete Recipe</a>";
                }
            }
            ?>
            <h2>Blog</h2>
            <img src="Assets/Images/3jollof.jpg" alt="Blog post image" id="Blog-image">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, deserunt incidunt maiores doloribus
                repellendus, dolor qui voluptate accusamus quos hic porro! Quo, veniam dolore eius non illum commodi,
                vel
                dicta, autem doloribus impedit consequuntur similique tenetur iste facere. Ut, eaque! Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Error at minima provident commodi, rem ullam cum, atque magni,
                tenetur velit vero libero illum numquam tempora amet cumque. Aspernatur nemo autem totam inventore
                nostrum voluptate? Molestiae iste aliquam temporibus magnam voluptate. Lorem ipsum dolor sit amet
                consectetur adipisicing elit iste aliquam elit. </p>
                <p>Ducimus rem in maxime perferendis, quidem expedita omnis reiciendis odit
                suscipit optio tempora, repellendus voluptatem vel explicabo odio incidunt, vero iste laboriosam! Fugit
                repellendus dolor odio dolorum, libero consequatur illum error laudantium velit harum eius nobis
                explicabo repudiandae? Natus magnam in repellendus? Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Voluptates voluptatum error odit alias labore aspernatur quaerat architecto. Amet voluptatibus
                unde cupiditate vero neque, iure repellat molestiae magnam maiores officiis deleniti tenetur
                accusantium, veniam molestias ducimus maxime, ea temporibus hic deserunt. Possimus ad eveniet a impedit
                atque nemo voluptates cupiditate.</p>
                <p>Ducimus rem in maxime perferendis, quidem expedita omnis reiciendis odit
                    suscipit optio tempora, repellendus voluptatem vel explicabo odio incidunt, vero iste laboriosam! Fugit
                    repellendus dolor odio dolorum, libero consequatur illum error laudantium velit harum eius nobis
                    explicabo repudiandae? Natus magnam in repellendus? Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Voluptates voluptatum error odit alias labore aspernatur quaerat architecto. Amet voluptatibus
                    unde cupiditate vero neque, iure repellat molestiae magnam maiores officiis deleniti tenetur
                    accusantium, veniam molestias ducimus maxime, ea temporibus hic deserunt. Possimus ad eveniet a impedit
                    atque nemo voluptates cupiditate.</p>
        </main>
        <!--MAIN END-->
        <section><h2>Trending Recipes</h2>
            <img src="Assets/Images/jollof.jpg" alt="Jollof" id="jollof-image">
            <p>Jollof</p>

        </section>
        <aside>
            <img src="Assets/Images/friedrice.jpg" alt="friedrice" id="fried-rice">
            <p>Fried Rice</p>
        </aside>

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