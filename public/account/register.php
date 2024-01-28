<?php
$pgTitle = 'Register';
require '../layout.php';

// connect to database
$servername = "localhost";
$username = "db_username";
$password = "db_password";
$dbname = "db_name";

// create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($connect, $_POST["username"]);
    $email = mysqli_real_escape_string($connect, $_POST["email"]);
    $password = mysqli_real_escape_string($connect, $_POST["password"]);

    // password obscured for user security
    $password = password_hash($password, PASSWORD_BCRYPT);

    // insert user data into database
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
    <label for="password">Please enter your password:</label>
    <input type="password" name="password" required><br><br>
    <input type="submit" value="Create account">
</form>

<?php
// adds user without admin privileges
if (isset($_POST['submit'])) {
    addUser(false); //adds the user to the db without admin privileges
    echo '<p>Successful account creation</p>';
}
?>