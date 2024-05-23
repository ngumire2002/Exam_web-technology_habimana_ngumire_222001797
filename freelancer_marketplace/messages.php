<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('Image\ 12.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 20px;
            box-sizing: border-box;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.8); 
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
        textarea,
        input[type="date"],
        button {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: pink;
        }
    </style>
</head>
<body>
    <form id="messageForm" method="post">
        <div>
            <label for="sender">Sender:</label>
            <input type="text" id="sender" name="sender" required>
        </div>
        <div>
            <label for="receiver">Receiver:</label>
            <input type="text" id="receiver" name="receiver" required>
        </div>
        <div>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="8" required></textarea>
        </div>
        <!-- Additional input fields -->
        <div>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" required>
        </div>
        <div>
            <button type="submit">Send Message</button>
        </div>
    </form>

    <?php
    // Database connection
    include "connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $sender = $_POST['sender'];
        $receiver = $_POST['receiver'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $date = $_POST['date'];
        $status = $_POST['status'];

        // SQL query to insert data into the messages table
        $sql = "INSERT INTO messages (sender, receiver, subject, body, date, status) 
                VALUES ('$sender', '$receiver', '$subject', '$message', '$date', '$status')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
</body>
</html>
