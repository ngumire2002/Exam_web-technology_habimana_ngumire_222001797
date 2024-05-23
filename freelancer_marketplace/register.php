<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('Image\ 3.jpeg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white; /* Ensures text is readable over the background */
            padding: 20px;
            box-sizing: border-box;
        }

        .message {
            max-width: 500px;
            margin: 20px auto;
            padding: 15px;
            background: rgba(255, 255, 255, 0.8);
            color: black; /* Ensures message text color is black */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .error {
            border-left: 5px solid red;
        }

        .success {
            border-left: 5px solid green;
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
        die('<div class="message error">Connection failed: ' . $conn->connect_error . '</div>');
    }

    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $username = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="message success">Registration successful. Redirecting to home page...</div>';
        header('Refresh: 3; URL=home.php');
    } else {
        echo '<div class="message error">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    }

    $conn->close();
    ?>
</body>
</html>
