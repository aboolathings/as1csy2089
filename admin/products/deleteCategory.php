<?php
session_start();
$pgTitle = 'Category Management';
require '../layout.php';

// delete category
function deleteCategory($name, $userType) {
    if ($userType === "admin") {
        $categories = getCategories();
        $index = array_search($name, $categories);
    }
    else {
            echo "You do not have the required permissions to delete a category.";
    }
    if ($index !== false) {
        unset($categories[$index]);
        updateCategories($categories);
    }
  }

?>