<?php
session_start();
$pgTitle = 'Question List';
require '../layout.php';

// check for admin status
function checkUserType($user) {
    if ($userType === "admin") {
        $questions = getQuestions();
    }
    else {
        echo "You do not have the required permissions to access this page.";
    }
}

// get all questions from database
function getQuestions() {
    return $questions;
  }
  
// update questions in database
 function updateQuestions($questions) {
  }

// delete questions in database
function deleteQuestions($questions) {
  }

?>