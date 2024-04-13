<!DOCTYPE html>
<html lang="en">

<!--HEAD START-->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>register</title>
  <link rel="stylesheet" href="Assets/CSS/registerstyle.css">
</head>
<!--HEAD END-->
<!--BODY START-->

<body>

  <div id="content">

    <!--START FIRST SECTION-->
    <section id="register-1">
      <img src="Assets/Images/login2.jpg" alt="login-image" id="login-image">
    </section>
    <!--END FIRST SECTION-->

    <!--START SECOND SECTION-->
    <section id="register-2">

     <a href="index.php" ><img src="Assets/Images/imglogo.png" alt="logo" id="login-logo"></a>

      <div id="register-wrapper">
        <h1>Register with Potbelly</h1>
        <p>Hello welcome to Pot Belly Ghana</p>

        <!--FORM START-->
        <form action="registration-backend.php" method="POST">
          <table>
          <tr>
            <td>
              <label for="username">Username:</label>
            </td>
          <td>
            <input type="username" name="username" placeholder="Username" id="Username">
          </td>
        </tr>


          <tr>
          <td>
            <label for="email">Email:</label>
          </td>

          <td>
            <input type="email" name="email" placeholder="Email" id="email" oninput="checkEmail()">
            <!--<input type="email" name="email" placeholder="Email" id="Email">-->
            <!--<br>-->
            <span id="check-email"></span>
          </td>
          </tr>


          <tr>

            <td>
            <label for="address">Adress:</label>
          </td>

          <td>
            <input type="text" name="address" placeholder="Address" id="Address">
          </td>

          </tr>

          <tr>
            <td>
            <label for="password">Password:</label></td>
            <td>
            <input type="password" name="password" placeholder="Password" id="Password">
            </td>
          </tr>

          <tr>
          <td>
            <label for="conpassword">Confirm Password:</label>
          </td>
          <td>
            <input type="password" name="conpassword" placeholder="Confirm Password" id="conpassword">
          </td>
          </tr>

        <tr>
          <td>
        <label for="user_type">Select User Type:</label>
        
      </td>
      <td>
        <select name="user_type" id="user_type">
            <option value="recipe_seeker">Recipe Seeker</option>
            <option value="chef">Chef</option>
            <option value="admin">Admin</option>
        </select>
      </td>
       </tr>
    

          <tr>
            <td>

          </td>
          <td>
            <input type="submit" name="register_button" value="Register">
           </td>
        </tr>
        </table>
        </form>
        Already have an account? <i><a href="login.php">Login Here</a></i>

      </div>
    </section>
    <!--END SECOND SECTION-->
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 

  <script>
    function checkEmail(){
      jQuery.ajax({
      url: "registration-backend.php",
      data:'email='+$("#email").val(),
      type:"POST",
      success:function(data){
        $("check-email").html(data);
      },error:function(){}
      });
    }
  </script>

</body>
<!--BODY END-->

</html>