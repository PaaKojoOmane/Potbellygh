<?php
// START A SESSION

session_start();
// print_r($_SESSION) 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Chefs page</title>
    <link rel="stylesheet" href="Assets/CSS/chefsstyle.css">
</head>

<body>
 <?php //echo "Welcome " . $_SESSION['username']; ?>  

    <div id="content">
        <!--HEADER START-->
        <?php include "./partials/header.php" ?>
        <!--HEADER END-->
        <!--MAIN START-->
        
        <a href="chefProfile.html" id="chefsection-1"><section >
            <!-- Section start-->
            <h2>Chef 1</h2> 
            <img src="Assets/Images/chefs/chef-1" alt="chef-1" id="chef-1"> 
            <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p>   
        </section></a>
        
        <a href="chefProfile.html" id="chefsection-2"><section >
            <h2>Chef 2</h2>
            <img src="Assets/Images/chefs/chef-2.jpg" alt="chef-2" id="chef-2"> 
            <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p> 
        </section></a>
        
        <a href="chefProfile.html" id="chefsection-3" ><section  >
            <h2>Chef 3</h2> 
            <img src="Assets/Images/chefs/chef-3.jpg" alt="chef-3" id="chef-3"> 
            <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p> 
        </section></a>
        
        <a href="chefProfile.html" id="chefsection-4"><section >
            <h2>Chef 4</h2>
            <img src="Assets/Images/chefs/chef-4.jpeg" alt="chef-4" id="chef-4"> 
             <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p> 
        </section></a>

        <a href="chefProfile.html" id="chefsection-5"><section >
            <h2>Chef 5</h2>
            <img src="Assets/Images/chefs/chef-5.jpg" alt="chef-5" id="chef-5"> 
            <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p> 
        </section></a>

        <a href="chefProfile.html" id="chefsection-6" ><section >
            <h2>Chef 6</h2>
            <img src="Assets/Images/chefs/chef-6" alt="chef-6" id="chef-6"> 
            <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p> 
        </section></a>

        <h4 id="morechefs">More</h4>
        
        

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