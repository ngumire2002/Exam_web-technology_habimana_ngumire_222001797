<?php
// names: habimana, reg no: 222001797

$hostname = "localhost";
$username = "root";
$password = "";
$database = "freelancer_marketplace";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Not connected: " . $conn->connect_error);
} else {
    if(isset($_POST['jobTitle']) && isset($_POST['jobLocation']) && isset($_FILES['jobFile'])) {
        $jobTitle = $conn->real_escape_string($_POST['jobTitle']);
        $jobLocation = $conn->real_escape_string($_POST['jobLocation']);
        $targetDir = "uploads/";

        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $fileName = basename($_FILES["jobFile"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        if (!empty($fileName)) {
            $allowedTypes = array('txt', 'pdf', 'doc', 'docx');
            if (in_array($fileType, $allowedTypes)) {
                if (move_uploaded_file($_FILES["jobFile"]["tmp_name"], $targetFilePath)) {
                    $sql = "INSERT INTO jobs (jobTitle, jobLocation, jobFile) VALUES ('$jobTitle', '$jobLocation', '$fileName')";
                    if ($conn->query($sql) === TRUE) {
                       header('location:getHired.php');
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                } else {
                    echo "Error uploading file.";
                }
            } else {
                echo "Invalid file format. Allowed formats: txt, pdf, doc, docx";
            }
        } else {
            echo "No file selected.";
        }
    } else {
        echo "Error: Missing required data (jobTitle, jobLocation, jobFile)";
    }
}

$conn->close();
?>
