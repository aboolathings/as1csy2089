<?php
session_start();
$pgTitle = 'Product Management';
require '../layout.php';

// delete product
function deleteProducts($name, $userType) {
    if ($userType === "admin") {
        $products = getProducts();
        $index = array_search($name, $brands, $categories);
    }
    else {
            echo "You do not have the required permissions to delete a category.";
    }
    if ($index !== false) {
        unset($products[$index]);
        updateProducts($products);
    }
  }

?>