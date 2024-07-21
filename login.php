<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title = "Received";
require_once './includes/header.php';
require_once './db/conn.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Secure SQL query using prepared statements
    $stmt = $conn->prepare("SELECT * FROM signup_form WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION['email'] = $email;
        echo "Login successful!";
        // Redirect to a protected page
        header("Location: index.php");
        exit();
    } else {
        // Invalid credentials
        echo "Invalid email or password.";
    }

    // Close the statement and the database connection
    $stmt->close();
    mysqli_close($conn);
}
?>

<?php
require_once './includes/footer.php';
?>