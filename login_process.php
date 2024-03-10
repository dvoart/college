<?php

// Start session
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}


// Database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'college';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Fetch user data from database
    $query = "SELECT * FROM college_students WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User found, verify password
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['phone'] = $user['phone'];
            $_SESSION['gender'] = $user['gender'];

            // Redirect to dashboard or any other page
            header("Location: dashboard.php");
            exit();
        } else {
            // Password is incorrect
            $_SESSION['incorrect_email_or_password'] = true;
            header("Location: login.php");
            exit();
        }
    } else {
        // Email does not exist
        $_SESSION['incorrect_email_or_password'] = true;
        header("Location: login.php");
        exit();
    }
}
// Close connection
$conn->close();

?>