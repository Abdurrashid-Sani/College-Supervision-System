<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $category = $_POST['category'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND category='$category'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['category'] = $category;
        
        switch ($category) {
            case 'Administrator':
                header("Location: pages/administrator.html");
                break;
            case 'Parent':
                header("Location: pages/parent.html");
                break;
            case 'NGO':
                header("Location: pages/ngo.php");
                break;
            case 'PTO':
                header("Location: pages/pta.php");
                break;
            case 'Teacher':
                header("Location: pages/teacher.php");
                break;
            default:
                echo "Invalid category";
        }
    } else {
        echo "Invalid username or password";
    }
}

$conn->close();
?>
