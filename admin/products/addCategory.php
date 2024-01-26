<?php
session_start();
$pgTitle = 'Category Management';
require '../layout.php';

// add category, requires admin
function addCategory($name, $userType) {
    if ($userType === "admin") {
        $categories = getCategories();
        array_unshift($categories, $name);
        updateCategories($categories);
    }
    else {
            echo "You do not have the required permissions to add a category.";
    }
    
}

?>