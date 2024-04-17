<?php

session_start();
include('connection.php');

// Get form data
$recipeName = $_POST['recipeName'];
$category = $_POST['category'];
$ingredient = $_POST['ingredient'];
$instructions = $_POST['instructions'];

// Get the ID of the recipe owner from the session (current_user)
$chef_id = $_SESSION['user_id'];

try {
    // Check if required fields are empty
    if (empty($recipeName) || empty($category) || empty($ingredient) || empty($instructions)) {
        echo "All fields are required.";
    } else {
        // Check if "user" session variable is set
        if (!isset($_SESSION['user_id'])) {
            throw new Exception("User session not set.");
        }

        // Handle file uploads
        $fileName = $_FILES['photo']['name'];
        $fileTmpName = $_FILES['photo']['tmp_name'];
        $fileSize = $_FILES['photo']['size'];
        $fileError = $_FILES['photo']['error'];
        $fileType = $_FILES['photo']['type'];

        // Get file extension
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Allowed file formats
        $allowedFormats = array('jpg', 'jpeg', 'png', 'avif', 'webp');

        // Check if file format is allowed
        if (in_array($fileExt, $allowedFormats)) {
            // Check for upload errors
            if ($fileError === 0) {
                // Check file size
                if ($fileSize < 1000000) { // 1MB limit
                    $fileNameNew = uniqid('', true) . '.' . $fileExt;
                    $fileDestination = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $fileNameNew;

                    // Move the file to the desired location
                    if (move_uploaded_file($fileTmpName, $fileDestination)) {
                        echo "File uploaded successfully.";
                    } else {
                        echo "Error moving file.";
                    }
                } else {
                    echo "The file is too large.";
                }
            } else {
                echo "Error uploading file: $fileError";
            }
        } else {
            echo "You cannot upload files of this type.";
        }

        // Insert data into database if file upload was successful
        $sql = "INSERT INTO recipepage (user_id, recipeName, category, ingredient, instructions, photo) VALUES ('$chef_id', '$recipeName', '$category', '$ingredient', '$instructions', '$fileNameNew')";
        $result = mysqli_query($db, $sql);

        if ($result) {
            echo "Data inserted successfully.";
            header("Location: index.php");
        } else {
            echo "Error inserting data.";
            header("Location: uploadpage.php");
        }
    }
} catch (PDOException $e) {
    // Handle database errors
    echo "Database error: " . $e->getMessage();
}
?>
