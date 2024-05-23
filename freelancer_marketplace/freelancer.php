<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('Image\ 3.jpeg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 20px;
            box-sizing: border-box;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.8); /* Add a white background with transparency */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        div {
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        button {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: yellow;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: orange;
        }
    </style>
</head>
<body>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "freelancer_marketplace";

    // Create connection
    $conn = new mysqli($hostname, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle form submission
    $message = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if all required fields are set
        if (isset($_POST['name']) && isset($_POST['skills']) && isset($_POST['hourlyRate'])) {
            $name = $conn->real_escape_string($_POST['name']);
            $skills = $conn->real_escape_string($_POST['skills']);
            $hourlyRate = $conn->real_escape_string($_POST['hourlyRate']);

            // Insert data into database
            $sql = "INSERT INTO freelancers (name, skills, hourly_rate) VALUES ('$name', '$skills', '$hourlyRate')";

            if ($conn->query($sql) === TRUE) {
                $message = "Freelancer added successfully!";
            } else {
                $message = "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            $message = "Please fill in all fields.";
        }
    }
    ?>
    <?php if (!empty($message)): ?>
        <p class="message"><?= $message ?></p>
    <?php endif; ?>
    <form id="freelancerForm" action="" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="skills">Skills:</label>
            <input type="text" id="skills" name="skills" required>
        </div>
        <div>
            <label for="hourlyRate">Hourly Rate ($):</label>
            <input type="number" id="hourlyRate" name="hourlyRate" required>
        </div>
        <div>
            <button type="submit">Add Freelancer</button>
        </div>
    </form>
</body>
</html>
