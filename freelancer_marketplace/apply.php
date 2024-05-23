<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $jobTitle = $_POST['jobTitle'];
    $jobLocation = $_POST['jobLocation'];
    $jobProposal = $_POST['jobProposal'];
    $paymentMethod = $_POST['paymentMethod'];

    // Handle file upload
    if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == 0) {
        $file = addslashes(file_get_contents($_FILES['attachment']['tmp_name']));
    } else {
        $file = null;
    }

    // Insert into database
    $sql = "INSERT INTO application (JobTitle, jobLocation, JobProposal, file, paymentMethod) 
            VALUES (?, ?, ?, ?, ?)";

    // Prepare statement
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssss", $jobTitle, $jobLocation, $jobProposal, $file, $paymentMethod);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "Application submitted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
