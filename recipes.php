<?php
session_start(); // Start the session

include("./connection.php");

// Fetch distinct categories from the database
$categories_sql = "SELECT DISTINCT category FROM recipepage";
$categories_result = mysqli_query($db, $categories_sql);

// Check if form is submitted
if(isset($_POST['category_filter'])) {
    $selected_category = $_POST['category_filter'];
    // Query recipes filtered by selected category
    $recipes_sql = "SELECT * FROM recipepage WHERE category = '$selected_category'";
} else {
    // Query all recipes if no category filter is selected
    $recipes_sql = "SELECT * FROM recipepage";
}

$result = mysqli_query($db, $recipes_sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Recipes page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Assets/CSS/recipesstyle.css">
</head>

<body>

    <div class="container">
        <!--HEADER START-->
        <?php include "./partials/header.php" ?>
        <!--HEADER END-->
        <!--FILTER FORM START-->
        <form method="POST" action="" class="mb-3 mt-3">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="category_filter" class="col-form-label">Filter by Category:</label>
                </div>
                <div class="col-auto">
                    <select class="form-select" name="category_filter" id="category_filter">
                        <option value="">All Categories</option>
                        <?php
                        // Display options for category filter dropdown
                        while ($category_row = mysqli_fetch_assoc($categories_result)) {
                            $category_name = $category_row['category'];
                            echo "<option value='$category_name'>$category_name</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary" type="submit">Filter</button>
                </div>
            </div>
        </form>
        <!--FILTER FORM END-->
        <!--MAIN START-->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                if ($result && mysqli_num_rows($result) > 0) {
                    while ($recipe = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="col">
                            <a href="./recipePage.php?recipeName=<?= urlencode($recipe["recipeName"]) ?>" class="text-decoration-none">
                                <div class="card">
                                    <img src="Assets/Images/recipe/beans and plantain 2.jpg" class="card-img-top" alt="recipe-2">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $recipe["recipeName"] ?></h5>
                                        <p class="card-text"><?= $recipe["category"] ?></p>
                                        <?php
                                        // Display edit and delete buttons for chefs
                                        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'chef') {
                                            echo "<a href='edit_recipe.php?id={$recipe['id']}' class='btn btn-primary'>Edit</a>";
                                            echo "<a href='delete_recipe.php?id={$recipe['id']}' class='btn btn-danger'>Delete</a>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                } else {
                    echo "<p class='col'>No recipes found</p>";
                }
            ?>
        </div>
        <!--MAIN END-->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
