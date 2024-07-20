<?php 
    $title = "Sign Up";
    require_once "./includes/header.php";
    require_once './db/conn.php';
   
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $province = $_POST["province"];
    $area_code = $_POST["area_code"];

    if ($password !== $confirm_password) {
        die("Passwords do not match. Please go back and try again.");
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT, $options);

    $sql = "INSERT INTO signup_form (first_name, last_name, username, email, password, address, city, province, area_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if (mysqli_query($conn, $sql)) {
        echo '<h1 class="text-danger text-center">Welcome,' . $first_name .'!</h1>';
        } else {
            echo "Error: " . mysqli_error($conn);
        }
}
    mysqli_close($conn);

?>
<?php 
    require_once "./includes/footer.php"
?>
