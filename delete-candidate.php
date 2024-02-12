<?php
$server = "153.92.6.103";
$user = "u923315908_revisewithmeU";
$password = "Bh@rat$2023#";
$database = "u923315908_revisewithmeDB";

$conn = new mysqli($server, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $userId = $_GET['id']; 
    // Delete Query
    $deleteQuery = "DELETE FROM candidate_details WHERE candidate_id = '$userId'";

    // Execute the delete query
    if ($conn->query($deleteQuery)) {       
        echo '<script>history.back();</script>';
        exit();
    } else {
        // If there is an error in the delete query, display the error
        echo "Error deleting user: " . $conn->error;
    }  

$conn->close();
?>
