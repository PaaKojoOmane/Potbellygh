<?php 
// Start Session

session_start();

/*print_r($_SESSION);*/


?>


<!DOCTYPE html>
<html lang="en">

<!--HEAD START-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Recipe</title>
    <link rel="stylesheet" href="Assets/CSS/uploadrecipe.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<!--HEAD END-->

<!--BODY START-->

<body>

    <div id="content">

       

        <!--START SECOND SECTION-->
         <section id="upload-1">
            <a href="index.php"><img src="Assets/Images/imglogo.png" alt="logo" id="login-logo"></a>
            <br><br><br> <h1>Upload Your Recipe</h1>
            <input type="submit" value="Choose file">
            <p>Acceptable file types: .jpg, .png, .pdf | Max file size: 10MB</p>
            <h1>Instructions</h1>
            <p>Select a file from your computer.Wait for the upload to complete.Add a title and description.</p>
        </section> 



             <!--START FIRST SECTION-->
      <!-- <div id="upload-2">
        <h1>Upload Your Recipe</h1>
        <P><input type="submit" name="upload file" id="uploadFile" value="Submit"></P>
       </div>-->
    <!--END FIRST SECTION-->

            <div id="upload-wrapper">
                <h1>New Recipe</h1>
                <h2>Enter new recipe details</h2>

                <!--FORM START-->
                <form action="uploadpage.inc.php" method="POST">
                   
                   
                   
                   <!-- <p> <label for="email">Email:</label>-->
                      <!--  <input type="Title" name="Title" placeholder="Title" id="title"> -->
                   <!--- </p>-->
                   <!--- <p> <label for="email">Email:</label>-->
                      <!--  <input type="ingredents" name="ingredents" placeholder="Ingredents(Seperate with a comma)" id="ingredents">
                    </p>
                    <p> <label for="email">Email:</label>
                        <input type="description" name="description" placeholder="Description" id="description">
                       
                    </p>
                    <p>
                        <label for="password">Password:</label>
                        <input type="password" name="password" placeholder="Password" id="Password">
                    </p>
                    <p>  -->




                     <!--New form -->
                        <label>Recipe Name:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="recipeName" /> <br><br>
                        <label>Category:&nbsp;&nbsp;</label>
                        <input type="text" name="category" /> <br><br>
                        <label>Ingredients:&nbsp;&nbsp;&nbsp;</label>
                        <textarea name="ingredient" id="ingredient" rows="5" cols="100"> </textarea><br><br>
                        <label>Instructions:&nbsp;&nbsp;&nbsp;</label>
                        <textarea name="instructions" id="Instructions" rows="10" cols="100"> </textarea><br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                       <!--- <input type="submit" name="submit" value="Submit" />
                        &nbsp;&nbsp;&nbsp;&nbsp;-->
                        <input type="file" name="photo" id="photo"><br><br>
                        <input class="btn btn-primary" type="submit" value="Upload File">

                    </p>
                </form>
                <!--Don't have an account? <i><a href="register.php">Register Here</a></i>-->


                <!--END SECOND SECTION-->
            </div>

       <!-- </section>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<!--BODY END-->

</html>