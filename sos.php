<?php
require 'connection.php';

// Handle SOS request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have user authentication in place, retrieve user ID
    $user_id = 1; // Example user ID
    
    // Sanitize SOS message and location data
    $message = $conn->real_escape_string($_POST["message"]);
    $latitude = $conn->real_escape_string($_POST["latitude"]);
    $longitude = $conn->real_escape_string($_POST["longitude"]);

    // Insert SOS request into database
    $sql = "INSERT INTO sos_requests (user_id, message, latitude, longitude) VALUES ('$user_id', '$message', '$latitude', '$longitude')";
    
    if ($conn->query($sql) === TRUE) {
        // SOS request successfully logged
        echo "SOS request sent successfully.";
     } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close MySQL connection
$conn->close();
?>
