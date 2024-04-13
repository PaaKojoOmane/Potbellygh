<?php

session_start();
include('connection.php');
//  $chefname=$_POST['chefname'];
 $recipeName=$_POST['recipeName'];
 $category=$_POST['category'];
 $ingredient=$_POST['ingredient'];
 $instructions=$_POST['instructions'];
 $photo = $_POST['photo'];



// GET THE ID OF THE RECIPE OWNER FROM THE SESSION (Current_user)

    $chef_id = $_SESSION['user_id'];

    try {
        //code...
        
            if(empty($_POST["recipeName"]) || empty($_POST["category"]) || empty($_POST["ingredient"]) || empty($_POST["ingredient"]) || empty($_POST["instructions"]))
            {
                echo "All fields are required.";
            }
            
            else
            {   
                // Check if "user" session variable is set
                if (!isset($_SESSION['user_id'])) {
                    throw new Exception("User session not set.");
                }

                // Handle file uploads
                $fileName = $_FILES['photo']['name'];
                $fileTmpName = $_FILES['photo']['tmp_name'];
                $fileSize = $_FILES['photo']['size'];
                $fileErr = $_FILES['photo']['error'];
                $fileType = $_FILES['photo']['type'];
                
                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));
                
                $allowedFormat = array('jpg', 'jpeg', 'png', 'avif', 'webp');
                
                // check if type of file submitted is of a format we allowed
                if (in_array($fileActualExt, $allowedFormat)) {
                    if ($fileErr === 0) {
                        if ($fileSize < 1000000) {
                            $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                            $fileDestination = './uploads/' . $fileNameNew;
                            // move the file to the desired location
                            move_uploaded_file($fileTmpName, $fileDestination);
                            echo "uploaded";
                            $photo = $fileNameNew; // Assign the new filename to $photo
                    } else {
                        echo "<p>The file is too large!</p>";
                    }
                } else {
                    echo "<p>There was an error uploading your file!</p>";
                }
            } else {
                echo "<p>You cannot upload files of this type!</p>";
            }
            
            
            $sql = "INSERT INTO recipepage (user_id, recipeName,category,ingredient,instructions, photo) VALUES ('$chef_id', '$recipeName','$category','$ingredient','$instructions', '$photo')";
            // $sql = "INSERT INTO recipepage (recipeName, category, ingredient, instructions) VALUES ('$recipeName','$category','$ingredient','$instructions')";
            
            $result = mysqli_query($db, $sql);
            
            if($result)
            {
                echo "Successfully";
                header("Location: index.php");
            }
            else
            {
                echo "Something Went Wrong!";
                header("Location: uploadpage.php");
            }
        }

    } catch (PDOException $e) {
        // Handle database errors
        echo "Error: " . $e->getMessage();
    }
?>