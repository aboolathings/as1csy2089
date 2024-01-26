<?php
$pgTitle = 'Login';
require '../layout.php';

// check login status
function checkUserType($user) {
    if ($userType === "public") {
        $user = getUser();
    }
    else {
        echo "You are not currently logged in, please login and try again.";
        echo '<a href="register.php">Register</a>';
    }
}

// update user info
function editUser($oldName, $newName, $userType, $email, $password) {
    if ($userType === "public") {
        $user = getUser();
        $index = array_search($oldName, $email, $questions);
    }
    else {
            echo "You were unable to update your account, please try again.";
    }
    if ($index !== false) {
      $user[$index] = $newName, $email, $password;
      updateUser($user);
    }
}

// view questions
function viewQuestions($userID, $questions) {
    if ($questions !== false) {
        $questions[$index] = $userID, $products, $brands, $categories;
        $questions = getQuestions();
    }
    else if ($questions == $newQuestions) {
        echo "Your question is still pending, please wait for a member of our team to respond. You will receive an email notification when your question has been answered; we thank you for your patience.";

    }
    else {
        echo "You have no questions available to view at this time, please go to a product page to ask a question.";
    }
}

?>