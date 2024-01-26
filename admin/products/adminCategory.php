<?php
session_start();
$pgTitle = 'Category List';
require '../layout.php';

// check for admin status
function checkUserType($user) {
    if ($userType === "admin") {
        $categories = getCategories();
    }
    else {
        echo "You do not have the required permissions to access this page.";
    }
}

// get all categories from database
function getCategories() {
    return $categories;
  }
  
  // update categories in database
  function updateCategories($categories) {
  }

?>