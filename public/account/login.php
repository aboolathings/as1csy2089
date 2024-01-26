<?php
$pgTitle = 'Login';
require '../layout.php';

// connect to database
$servername = "localhost";
$username = "db_username";
$password = "db_password";
$dbname = "db_name";

// create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// start session
session_start();

// check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($connect, $_POST["email"]);
    $password = mysqli_real_escape_string($connect, $_POST["password"]);

    // Get user data from database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $connect->query($sql);

    // if user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // verify password
        if (password_verify($password, $user["password"])) {
            // store user data in session
            $_SESSION["logged_in"] = true;
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["username"] = $user["username"];

            header("iBuy - Home");
            exit;
        } else {
            echo "Incorrect password. Please try again.";
        }
    } else {
        echo "User not found. Please try again or create an account.";
    }
}

$connect->close();

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="email">Please enter your email:</label>
    <input type="email" name="email" required><br><br>
    <label for="password">Please enter your password:</label>
    <input type="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>