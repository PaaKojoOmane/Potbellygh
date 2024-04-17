<?php
session_start();
include('connection.php');

// Check if recipe ID is provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: manage_recipes.php");
    exit();
}

// Get recipe ID from URL parameter
$recipeId = $_GET['id'];

// Delete recipe from the database
$sql = "DELETE FROM recipepage WHERE id = $recipeId";
$result = mysqli_query($db, $sql);

if ($result) {
    // Recipe deleted successfully
    header("Location: manage_recipes.php");
    exit();
} else {
    // Error deleting recipe
    $error = "Error deleting recipe.";
}
?>
