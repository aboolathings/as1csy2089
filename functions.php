<?php

$pdo = new PDO('mysql:as1db=test;host=mysql', 'v.je', 'v.je');

$server = 'mysql';
$username = 'student';
$password = 'student';
$schema = 'as1';
$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);

$results = $pdo->query('SELECT * FROM users');


// form for new product questions
$productquestion = '<h5> Have a question left unanswered after reading reviews and existing questions? Ask away:</h5>
<form action="<?php echo htmlspecialchars($newQuestion); ?>" method="post">
    <label>Name</label> <input type="text" name="1" />
    <label>Date</label> <input type="date" name="2" />
    <label>Question</label> <textarea></textarea>

    <input type="submit" name="submit" value="submit" />
</form>'

?>