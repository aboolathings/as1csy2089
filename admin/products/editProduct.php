<?php
session_start();
$pgTitle = 'Product Management';
require '../layout.php';

// edit 
function editProduct($oldName, $newName, $userType) {
    if ($userType === "admin") {
        $products = getProducts();
        $index = array_search($oldName, $categories, $brands, $prices);
    }
    else {
            echo "You do not have the required permissions to edit a category.";
    }
    if ($index !== false) {
      $products[$index] = $newName, $categories, $brands, $prices;
      updateProducts($products);
    }
}

?>