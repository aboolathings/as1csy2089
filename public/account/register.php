<?php
$pgTitle = 'Register';
require '../layout.php';

// Connect to database
$servername = "localhost";
$username = "db_username";
$password = "db_password";
$dbname = "db_name";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($connect, $_POST["username"]);
    $email = mysqli_real_escape_string($connect, $_POST["email"]);
    $password = mysqli_real_escape_string($connect, $_POST["password"]);

    // Hash the password for security
    $password = password_hash($password, PASSWORD_BCRYPT);

    // Insert user data into database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($connect->query($sql) === TRUE) {
        echo "Account created successfully.";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

$connect->close();
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="username">Please enter your desired username:</label>
    <input type="text" name="username" required><br><br>
    <label for="email">Please enter your email address:</label>
    <input type="email" name="email" required><br><br>
    <label for="email">Please confirm your email address:</label>
    <input type="email" name="email" required><br><br>
    <label for="password">Please enter your password:</label>
    <input type="password" name="password" required><br><br>
    <input type="submit" value="Create account">
</form>

?>