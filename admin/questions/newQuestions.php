<?php
session_start();
$pgTitle = 'Pending Questions';
require '../layout.php';

// check for admin status
function checkUserType($user) {
    if ($userType === "admin") {
        $newQuestions = getNewQuestions();
    }
    else {
        echo "You do not have the required permissions to access this page.";
    }
}

// answer pending questions
function answerQuestions(questions) {
    $newQuestions[$index] = $newAnswer;
      updateQuestions($newQuestions);
  }

  ?>