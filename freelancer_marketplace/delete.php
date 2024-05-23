<?php
// names: habimana, reg no: 222001797

include "connection.php";

if (isset($_GET['jobID'])) {
    $jobID = $_GET['jobID'];

    $sql = "DELETE FROM jobs WHERE jobID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $jobID);

    if ($stmt->execute()) {
        header("Location: getHired.php");
        exit();
    } else {
        echo "Error deleting job entry: " . $stmt->error;
    }

    $stmt->close();
} else {
    header("Location: getHired.php");
    exit();
}

$conn->close();
?>
