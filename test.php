<?php
$servername = "localhost";
$username = "id21282894_maha";
$password = "Pass@123";
$db = "id21282894_maha";

$conn = new mysqli($servername, $username, $password, $db);

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

// Check if the entered username exists in the "signup" table
$sql = "SELECT * FROM signup WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // User exists in the "signup" table, now check if the entered password matches
    $row = mysqli_fetch_assoc($result);
    $storedPassword = $row['passwords'];
    
    if ($password === $storedPassword) {
        // Authentication successful
        mysqli_close($conn);
        echo '<script>alert("Login successful!"); window.location.href = "https://maharashtrastourism.000webhostapp.com/index.html";</script>';
        exit;
    } else {
        // Incorrect password
        mysqli_close($conn);
        echo '<script>alert("Login failed. Incorrect password."); window.location.href = "https://maharashtrastourism.000webhostapp.com/login.html";</script>';
        exit;
    }
} else {
    // User does not exist
    mysqli_close($conn);
    echo '<script>alert("Login failed. User does not exist."); window.location.href = "https://maharashtrastourism.000webhostapp.com/login.html";</script>';
    exit;
}
?>
