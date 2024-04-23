<?php
$servername = "localhost";
$username = "id21282894_maha";
$password = "Pass@123";
$db = "id21282894_maha";

$conn = new mysqli($servername, $username, $password, $db);

$name = $_REQUEST['name'];
$mobile_number = $_REQUEST['mobile_number'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

$sql = "INSERT INTO contact_table (name, mobile_number, email, subject, message) VALUES ('$name', '$mobile_number', '$email', '$subject', '$message')";

if (mysqli_query($conn, $sql)) {
    // Data inserted successfully
    mysqli_close($conn);
    echo '<script>alert("Data inserted successfully!"); window.location.href = "https://maharashtrastourism.000webhostapp.com/contact_us.html";</script>';
    exit;
} else {
    // If there was an error
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
