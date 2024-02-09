<?php
$targetDirectory = "cv_uploads/"; // Create a folder named 'cv_uploads' in the same directory as this script
$allowedFileTypes = array('pdf', 'doc', 'docx');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get candidate name from the form
    $candidateName = $_POST['candidateName'];

    // Get the uploaded file details
    $cvFileName = basename($_FILES["cv"]["name"]);
    $targetFilePath = $targetDirectory . $cvFileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Check if the file type is allowed
    if (in_array($fileType, $allowedFileTypes)) {
        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["cv"]["tmp_name"], $targetFilePath)) {
            echo "CV uploaded successfully for candidate $candidateName.";
        } else {
            echo "Error uploading CV.";
        }
    } else {
        echo "Invalid file type. Allowed file types: " . implode(', ', $allowedFileTypes);
    }
}
?>
