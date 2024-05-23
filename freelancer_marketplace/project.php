<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Listings</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('Image\ 9.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 20px;
            box-sizing: border-box;
            color: blue; 
        }

        form {
            max-width: 600px;
            margin: 0 auto 20px auto;
            background: rgba(255, 255, 255, 0.8); 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: gold; 
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"],
        textarea,
        input[type="number"],
        select,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
        }

        button:hover {
            background-color: darkgreen;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.8); 
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
        }

        th {
            background: rgba(0, 0, 0, 0.1);
        }

        .back-home-btn-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .back-home-btn {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .back-home-btn:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <!-- Back Home button -->
    <div class="back-home-btn-container">
        <button class="back-home-btn" onclick="window.location.href='index.php'">Back Home</button>
    </div>

    <h1>Project Listings</h1>

    <!-- Project Form -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="title">Project Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="budget">Budget:</label>
        <input type="number" id="budget" name="budget" required>

        <label for="deadline">Deadline:</label>
        <input type="date" id="deadline" name="deadline" required>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Include database connection
    include "connection.php";

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and retrieve form data
        $title = $conn->real_escape_string($_POST['title']);
        $description = $conn->real_escape_string($_POST['description']);
        $budget = $conn->real_escape_string($_POST['budget']);
        $deadline = $conn->real_escape_string($_POST['deadline']);

        // Insert project data into the database
        $sql = "INSERT INTO projects (title, description, budget, deadline) VALUES ('$title', '$description', '$budget', '$deadline')";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Project added successfully!</p>";
        } else {
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }
    }

    // Fetch project listings from the database
    $sql = "SELECT id, title, description, budget, deadline FROM projects";
    $result = $conn->query($sql);

    // Check if the query execution is successful
    if (!$result) {
        die("Query failed: " . $conn->error);
    }
    ?>
    <!-- JavaScript function to handle project application -->
    <script>
        function openEditModal(projectID) {
            // Your logic to handle project editing here
            alert("Edit project with ID: " + projectID);
        }

        function openApplyModal(projectID) {
            // Your logic to handle project application here
            alert("Apply to project with ID: " + projectID);
        }
    </script>
</body>
</html>
