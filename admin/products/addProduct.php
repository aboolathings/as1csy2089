<?php
session_start();
$pgTitle = 'Product Management';
require '../layout.php';

// add product, requires admin
function addProduct($name, $userType) {
    if ($userType === "admin") {
        $products = getProducts();
        array_unshift($products, $name, $brand, $category, $price);
        updateProducts($products);
    }
    else {
            echo "You do not have the required permissions to add a category.";
    }
    
}

?>