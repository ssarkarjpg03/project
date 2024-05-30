<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "medi"; // Your MySQL database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
        
        // Notify emergency contacts
        $emergency_contacts = ["contact1@example.com", "contact2@example.com"]; // Replace with actual emergency contacts
        
        foreach ($emergency_contacts as $contact) {
            $subject = "SOS Alert!";
            $body = "SOS Message: $message\nLocation: https://www.google.com/maps?q=$latitude,$longitude";
            $headers = "From: no-reply@example.com"; // Replace with your email address

            mail($contact, $subject, $body, $headers);
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close MySQL connection
$conn->close();
?>
