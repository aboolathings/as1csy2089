<?php
session_start();
$pgTitle = 'Home';
require '../layout.php';

?>

<!doctype html>
<html>
    
<body>
    <main>
			<h1>Welcome to Ed's Electronics</h1>

			<p>We stock a large variety of electrical goods including phones, tvs, computers and games. Everything comes with at least a one year guarantee and free next day delivery.</p>

			<hr />
    <ul>
        <li><a href="products\tvs\tv.php">TVs</a></li>
        <li><a href="products\computers\computer.php">Computers</a></li>
        <li><a href="products\phones\phone.php">Phones</a></li>
        <li><a href="products\gaming\gaming.php">Gaming</a></li>
    </ul>

        <h2>Check out our newly added products!</h2>
            <ul>
            <li><a href="products\tvs\tv1.php">TV 1</a></li>
            <li><a href="products\tvs\tv2.php">TV 2</a></li>
            <li><a href="products\tvs\tv3.php">TV 3</a></li>
            <li><a href="products\phones\phone1.php">Phone 1</a></li>
            <li><a href="products\phones\phone2">Phone 2</a></li>
            <li><a href="products\phones\phone3">Phone 3</a></li>
            <li><a href="products\computers\computer1">Computer 1</a></li>
            <li><a href="products\computers\computer2">Computer 2</a></li>
            <li><a href="products\computers\computer3">Computer 3</a></li>
            <li><a href="products\computers\gaming1">Gaming 1</a></li>
            </ul>
</body>

</html> 

<?php

$pgcontent = '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni excepturi reprehenderit commodi laudantium quos porro nihil cum? Impedit alias pariatur, obcaecati, voluptatum doloribus, animi eligendi veniam molestias possimus sint soluta.</p>';

?>
