<?php
session_start();

$username = "admin";
$password = "admin123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["username"] == $username && $_POST["password"] == $password) {
        $_SESSION["admin"] = true;
        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>

<form method="post">
    <h2>Admin Login</h2>
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
</form>
