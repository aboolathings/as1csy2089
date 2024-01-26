<?php
session_start();
$pgTitle = 'Category Management';
require '../layout.php';

// edit category
function editCategory($oldName, $newName, $userType) {
    if ($userType === "admin") {
        $categories = getCategories();
        $index = array_search($oldName, $categories);
    }
    else {
            echo "You do not have the required permissions to edit a category.";
    }
    if ($index !== false) {
      $categories[$index] = $newName;
      updateCategories($categories);
    }
}

?>

