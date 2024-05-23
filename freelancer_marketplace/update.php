<?php
// names: habimana, reg no: 222001797

include "connection.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data
    $jobID = $_POST['jobID'];
    $jobTitle = $_POST['jobTitle'];
    $jobLocation = $_POST['jobLocation'];

    // Check if a new file is uploaded
    if ($_FILES['newJobFile']['size'] > 0) {
        // Handle file upload
        $file_name = $_FILES['newJobFile']['name'];
        $file_temp = $_FILES['newJobFile']['tmp_name'];
        $file_size = $_FILES['newJobFile']['size'];
        $file_type = $_FILES['newJobFile']['type'];
        $file_error = $_FILES['newJobFile']['error'];

        // Check file type and size
        $allowed_extensions = array('pdf', 'doc', 'docx');
        $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (!in_array($file_extension, $allowed_extensions)) {
            echo "Error: Unsupported file format. Please upload a PDF, DOC, or DOCX file.";
            exit();
        }
        // Limit file size to 10MB
        $max_file_size = 10 * 1024 * 1024; // 10MB
        if ($file_size > $max_file_size) {
            echo "Error: File size exceeds the maximum limit (10MB).";
            exit();
        }

        // Move uploaded file to the server
        $file_destination = $file_name; // Destination directory without "uploads/"
        if (move_uploaded_file($file_temp, $file_destination)) {
            // Update job details with the new file
            $sql = "UPDATE jobs SET jobTitle='$jobTitle', jobLocation='$jobLocation', jobFile='$file_destination' WHERE jobID='$jobID'";
            if ($conn->query($sql) === TRUE) {
                // Redirect to job listing page after successful update
                header("Location: getHired.php");
                exit();
            } else {
                // Error handling if update fails
                echo "Error updating job: " . $conn->error;
            }
        } else {
            // Error handling if file upload fails
            echo "Error uploading file.";
            exit();
        }
    } else {
        // Update job details without changing the file
        $sql = "UPDATE jobs SET jobTitle='$jobTitle', jobLocation='$jobLocation' WHERE jobID='$jobID'";
        if ($conn->query($sql) === TRUE) {
            // Redirect to job listing page after successful update
            header("Location: getHired.php");
            exit();
        } else {
            // Error handling if update fails
            echo "Error updating job: " . $conn->error;
        }
    }
}
?>
