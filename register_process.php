<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: register.php");
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

$errors = [];
$success_message = '';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password
    $address1 = mysqli_real_escape_string($conn, $_POST['address1']);
    $address2 = mysqli_real_escape_string($conn, $_POST['address2']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $postalcode = mysqli_real_escape_string($conn, $_POST['postalcode']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $agree = mysqli_real_escape_string($conn, $_POST['agree']);

    // Verify password
    if ($password !== $_POST['passwordconfirm']) {
        $errors[] = "Passwords do not match!";
    }

    // Check if the user is already registered
    $check_query = "SELECT * FROM college_students WHERE email = ?";
    $stmt = $conn->prepare($check_query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User is already registered
        $errors['email'] = "User with this email is already registered!";
    } else {
        // User is not registered, proceed with registration
        $insert_query = "INSERT INTO college_students (firstname, lastname, phone, email, password, address1, address2, city, state, postalcode, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("sssssssssss", $firstname, $lastname, $phone, $email, $hashed_password, $address1, $address2, $city, $state, $postalcode, $gender);

        if ($stmt->execute()) {
            // Store user data in session variables
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;
            $_SESSION['phone'] = $phone;
            $_SESSION['gender'] = $gender;

            // After successful registration
            $_SESSION['registration_success'] = true;

            
           
            <?php
            session_start();
            
            if (!isset($_SESSION['user_id'])) {
                header("Location: register.php");
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
            
            $errors = [];
            $success_message = '';
            
            // Check if form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve form data
                $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
                $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
                $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);
                $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password
                $address1 = mysqli_real_escape_string($conn, $_POST['address1']);
                $address2 = mysqli_real_escape_string($conn, $_POST['address2']);
                $city = mysqli_real_escape_string($conn, $_POST['city']);
                $state = mysqli_real_escape_string($conn, $_POST['state']);
                $postalcode = mysqli_real_escape_string($conn, $_POST['postalcode']);
                $gender = mysqli_real_escape_string($conn, $_POST['gender']);
                $agree = mysqli_real_escape_string($conn, $_POST['agree']);
            
                // Verify password
                if ($password !== $_POST['passwordconfirm']) {
                    $errors[] = "Passwords do not match!";
                }
            
                // Check if the user is already registered
                $check_query = "SELECT * FROM college_students WHERE email = ?";
                $stmt = $conn->prepare($check_query);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();
            
                if ($result->num_rows > 0) {
                    // User is already registered
                    $errors['email'] = "User with this email is already registered!";
                } else {
                    // User is not registered, proceed with registration
                    $insert_query = "INSERT INTO college_students (firstname, lastname, phone, email, password, address1, address2, city, state, postalcode, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = $conn->prepare($insert_query);
                    $stmt->bind_param("sssssssssss", $firstname, $lastname, $phone, $email, $hashed_password, $address1, $address2, $city, $state, $postalcode, $gender);
            
                    if ($stmt->execute()) {
                        // Store user data in session variables
                        $_SESSION['firstname'] = $firstname;
                        $_SESSION['lastname'] = $lastname;
                        $_SESSION['email'] = $email;
                        $_SESSION['phone'] = $phone;
                        $_SESSION['gender'] = $gender;
            
                        // After successful registration
                        $_SESSION['registration_success'] = true;
            
                        // Send welcome email
                        $to = $email;
                        $subject = "Welcome to Our Website";
                        $message = "
                            <html>
                            <head>
                            <title>Welcome</title>
                            </head>
                            <body>
                            <h2>Dear $firstname,</h2>
                            <p>Thank you for registering with us!</p>
                            <p>Your username (email): $email</p>
                            <p>Your password: $password</p>
                            <p>We look forward to serving you.</p>
                            <p>Best regards,<br>The Team</p>
                            </body>
                            </html>
                        ";
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        $headers .= "From: your_email@example.com";
            
                        if (!mail($to, $subject, $message, $headers)) {
                            // Failed to send email
                            $errors[] = "Error sending welcome email.";
                        }
            
                        // Redirect to login page
                        header("Location: login.php");
                        exit();
                    } else {
                        $errors[] = "Error: " . $conn->error;
                    }
                }
            }
            
            // Close connection
            $conn->close();
            
            // Display alert if there are errors
            if (!empty($errors)) {
                echo "<script>alert('" . implode("\\n", $errors) . "'); window.location.href='register.php';</script>";
            }
            ?>




            // Redirect to login page
            header("Location: login.php");
            exit();
        } else {
            $errors[] = "Error: " . $conn->error;
        }
    }
}

// Close connection
$conn->close();

// Display alert if there are errors
if (!empty($errors)) {
    echo "<script>alert('" . implode("\\n", $errors) . "'); window.location.href='register.php';</script>";
}
