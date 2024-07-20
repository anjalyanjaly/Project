<?php
$title = "Login";
require_once './includes/header.php';
require_once './db/conn.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT password FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($password_hash);
$stmt->fetch();
$stmt->close();

if (password_verify($password, $password_hash)) {
    echo "Login successful";
   
} else {
    echo "Invalid email or password";
}

$conn->close();
?>
<?php 
    require_once "./includes/footer.php"
?>

