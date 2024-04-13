<?php 
include("connection.php") 
?>
<!DOCTYPE html>
<html lang="en">

<!--HEAD START-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="Assets/CSS/login.css">
</head>
<!--HEAD END-->

<!--BODY START-->

<body>

    <div id="content">

        <!--START FIRST SECTION-->
        <section id="login-1">
            <img src="Assets/Images/login2.jpg" alt="login-image" id="login-image">
        </section>
        <!--END FIRST SECTION-->

        <!--START SECOND SECTION-->
        <sectionc id="login-2">
            <!--<img src="Assets/Images/imglogo.png" alt="logo" id="login-logo">-->
            <a href="index.php" ><img src="Assets/Images/imglogo.png" alt="logo" id="login-logo"></a>
            
    <div id="login-wrapper">
                <h1>Login</h1>
                <p>Hello welcome to Pot Belly Ghana</p>
               
                <!--FORM START-->
                <form action="login-backend.php" method="POST">
       <table><tr>
        <td><label for="email">Email:</label></td>
        <td>
    <input type="email" name="email" placeholder="Email" id="Email"></p>
   </td>
</tr>
<tr>
       <td><label for="password">Password:</label></td>
       <td>
        <input type="password" name="password" placeholder="Password" id="Password">
</td>
    </tr>
    <td> </td>
   <td>
       <input type="submit" value="Login">
       </td>

   </table>
    </form>
    Forgot password? <i><a href="forgotPassword.php">Forgot Password</a></i><br>
    Don't have an account? <i><a href="register.php">Register Here</a></i>

    <!--<div class="error"> -->
        <!--?php echo $error; 
        ?> 
        <!?php echo $username; echo $password; ?> ; -->
    <!--</div>-->
    <!--FORM END-->
    
    <!--<form action="">
                <table>
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td>
                            <input type="text" placeholder="Name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input type="text" placeholder="Email">
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                    
                        <td>
                            <button>Login</button>
                        </td>
                    </tr>
                </table>
            </form>-->
            </div>

            </section>
            <!--END SECOND SECTION-->
    </div>

</body>
<!--BODY END-->

</html>