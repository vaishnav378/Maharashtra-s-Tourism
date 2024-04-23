<?php
$servername = "localhost";
$username = "id21282894_maha";
$password = "Pass@123";
$db = "id21282894_maha";

$conn = new mysqli($servername, $username, $password, $db);

$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$passwords = $_REQUEST['passwords'];

$sql = "INSERT INTO signup (username, email, passwords) VALUES ('$username', '$email', '$passwords')";

if (mysqli_query($conn, $sql)) {
    
    mysqli_close($conn);
    echo '<script>alert("Registered successfully!"); window.location.href = "https://maharashtrastourism.000webhostapp.com/";</script>';
    exit;
} else {
    // If there was an error
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
