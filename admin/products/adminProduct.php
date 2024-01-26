<?php
session_start();
$pgTitle = 'Product List';
require '../layout.php';

// check for admin status
function checkUserType($user) {
    if ($userType === "admin") {
        $products = getProducts();
    }
    else {
        echo "You do not have the required permissions to access this page.";
    }
}

// get all products from database
function getProducts() {
    return $products;
  }
  
  // update products in database
  function updateProducts($products) {
  }

?>