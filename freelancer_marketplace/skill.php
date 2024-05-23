<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('Image\ 4.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white; /* Ensure text is readable */
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: rgba(0, 0, 0, 0.5); /* Background color for the form */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Box shadow for the form */
        }

        div {
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        textarea,
        button {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.8); /* Background color for input fields */
            color: #333; /* Text color for input fields */
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .message {
            margin: 20px auto;
            padding: 10px;
            max-width: 500px;
            border-radius: 4px;
            text-align: center;
        }

        .message.error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .message.success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>
    <?php
    $hostname = "localhost";  
    $username = "root";       
    $password = "";           
    $database = "Freelancer_marketplace"; 

    $conn = new mysqli($hostname, $username, $password, $database);

    if ($conn->connect_error) {
        die("<div class='message error'>Connection failed: " . $conn->connect_error . "</div>");
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $skill_name = isset($_POST['skill_name']) ? $_POST['skill_name'] : '';
        $proficiency = isset($_POST['proficiency']) ? $_POST['proficiency'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';

        $skill_name = mysqli_real_escape_string($conn, $skill_name);
        $proficiency = mysqli_real_escape_string($conn, $proficiency);
        $description = mysqli_real_escape_string($conn, $description);

        $sql = "INSERT INTO skills (skill_name, proficiency, description) VALUES ('$skill_name', '$proficiency', '$description')";

        if ($conn->query($sql) === TRUE) {
            echo '<div class="message success">Skill added successfully!</div>';
        } else {
            echo '<div class="message error">Error: ' . $sql . '<br>' . $conn->error . '</div>';
        }
    }

    $conn->close();
    ?>
    <form id="skillsForm" method="POST" action="">
        <div>
            <label for="skill_name">Skill Name:</label>
            <input type="text" id="skill_name" name="skill_name" required>
        </div>
        <div>
            <label for="proficiency">Proficiency:</label>
            <input type="text" id="proficiency" name="proficiency" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div>
            <button type="submit">Add Skill</button>
        </div>
    </form>
</body>
</html>
