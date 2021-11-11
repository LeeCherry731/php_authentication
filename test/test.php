<?php


$password = "123456";
//hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

echo $hashed_password . "<br>";
//verify password
$isTrue = password_verify("123456", "$2y$10$ZqK.ZDhaw"); // returns false

echo $isTrue;
echo "<br>".gettype($isTrue)."<br>";

if ($isTrue) {
echo "seccess";

} else {
    echo "failed";
}

try {
    $email = "test@test.com";
    $username = "root";
    $password = "123456789";
    $db = new PDO("mysql:host=localhost;dbname=etech", $username, $password);
    
    $stmt = $db->prepare('SELECT * FROM member WHERE email = ?;');
    $stmt->execute(array($email));
    $stmt->execute();
    $hashedPassword = $stmt->fetchAll();
    echo "<br>". $stmt->rowCount() ."<br>";
    // $checkPassword = password_verify($password, $hashedPassword[0]["password"]);
    echo $hashedPassword[0]["fname"];
    
} catch(PDOException $e) {
    echo "Error!: ". $e->getMessage() . "<br/>";
    die();
}


?>