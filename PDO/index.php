<?php
$host = 'localhost';
$user = 'alvin';
$password = 'alvin123';
$dbname = 'pdoposts';

//Create DSN - data source name

$dsn = "mysql:host=$host;dbname=$dbname";

//Create connection
$pdo = new PDO($dsn, $user, $password);

//set default fetch method as fetch as object
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// PDO query

$stmt = $pdo->query('SELECT * FROM posts');

// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
// 	echo $row['title'] . '<br>';
// }

//FETCH AS OBJECT

while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
	echo $row->title . '<br>';
}

//PREPARED STATEMENTS (POSITIONAL)

$sql = 'SELECT * FROM posts WHERE author=?';
$stmt = $pdo->prepare($sql);
$stmt->execute(['alvin']);

while ($row = $stmt->fetch()) {
	echo $row->author . '<br>';
}

//PREPARED STATEMENTS (NAMED)

$sql = 'SELECT * FROM posts WHERE author=:author';
$stmt = $pdo->prepare($sql);
$stmt->execute(["author" => 'alvin']);

while ($row = $stmt->fetch()) {
	echo $row->author . '<br>';
}

//INSERT DATA
$title = 'Post Five';
$body = 'This is post five';
$author = 'kevin';

$sql = 'INSERT INTO posts(title,body,author) VALUES (:title,:body,:author)';

$stmt = $pdo->prepare($sql);
$stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
echo 'Post Added';