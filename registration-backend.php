
<?php
// Database connection details
include("connection.php");

#CHECKING IF EMAIL ALREADY EXIST
if(!empty($_POST["email"])){
    $query = "SELECT * FROM users WHERE email='". $_POST["email"]."'";
    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);
    if($count > 0){
        echo "<span style='color:blue'> Email already exists!<span>";
        echo "<script>$('#submit').prop('disabled', true);</script>";
    }
}

if(isset($_POST['register_button']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];
    $user_type = $_POST['user_type']; // Added user type field

    //checking if input fields are empty
    if (empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["address"]) || empty($_POST["password"]))
    {
        echo "All fields are required";
    }
    // checking if password does not match
    elseif($password != $conpassword)
    {
        echo "Password and confirm password are not same";
    }
    else
    {   
        $sql = "INSERT INTO users (username, email, address, password,user_type) VALUES ('$username','$email','$address','$password','$user_type')";
        $result = mysqli_query($db, $sql);

        if($result)
        {
            echo "Registered Successfully";
            header("Location: login.php");  //Redirecting to login page
        }
        else
        {
            echo "Something Went Wrong!";
            header("Location: register.php");
        }
    }
}
?>
