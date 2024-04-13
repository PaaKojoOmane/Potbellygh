<?php 
include("connection.php") 
?>
<!DOCTYPE html>
<html lang="en">

<!--HEAD START-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="Assets/CSS/forgotpassword.css">
</head>
<!--HEAD END-->

<!--BODY START-->

<body>

    <div id="content">

        <!--START FIRST SECTION-->
       <!--- <section id="forgotpassword-1">
            <img src="Assets/Images/login2.jpg" alt="login-image" id="login-image">
        </section>-->
        <!--END FIRST SECTION-->

        <!--START SECOND SECTION-->
        <section id="forgotpassword-2">
            <img src="Assets/Images/imglogo.png" alt="logo" id="login-logo">

            <div id="forgotpassword-wrapper">
                <h1>Forgot Password</h1>
                <p>Verify your email to reset password</p>

                <!--FORM START-->
                <form action="sendPasswordReset.php" method="POST">
                    <p> <label for="email">Email:</label>
                        <input type="email" name="email" placeholder="Email" id="Email">
                    </p>
                    <!--<p>
                        <label for="password">Password:</label>
                        <input type="password" name="password" placeholder="Password" id="Password">
                    </p>-->
                    <p>
                        <input type="submit" value="Submit">

                    </p>
                </form>
                Don't have an account? <i><a href="register.php">Register Here</a></i>
                

                <!--END SECOND SECTION-->
            </div>

        </section>

</body>
<!--BODY END-->

</html>