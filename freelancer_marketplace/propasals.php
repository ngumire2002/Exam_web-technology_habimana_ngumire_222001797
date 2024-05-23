<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposal Form</title>
    <style>
        /* Background image */
        body {
            font-family: Arial, sans-serif;
            background-image: url('Image\ 1.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white; /* Text color for readability */
            margin: 0;
            padding: 0;
        }

        /* Form container */
        .form-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        /* Form input fields */
        .form-container input[type="text"],
        .form-container textarea,
        .form-container input[type="number"],
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            font-size: 16px;
        }

        /* Form submit button */
        .form-container button[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }

        /* Form submit button hover effect */
        .form-container button[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Form message */
        .message {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <!-- Your PHP code and HTML form -->
    <?php
    // Your PHP code here
    ?>

    <!-- Your HTML form here -->
    <div class="form-container">
        <!-- Display message if any -->
        <?php if (!empty($message)): ?>
            <p class="message"><?= $message ?></p>
        <?php endif; ?>

        <form id="proposalForm" action="" method="post">
            <div>
                <label for="freelancer">Freelancer:</label>
                <input type="text" id="freelancer" name="freelancer" required>
            </div>
            <div>
                <label for="project">Project:</label>
                <input type="text" id="project" name="project" required>
            </div>
            <div>
                <label for="coverLetter">Cover Letter:</label>
                <textarea id="coverLetter" name="coverLetter" rows="4" required></textarea>
            </div>
            <div>
                <label for="bidAmount">Bid Amount ($):</label>
                <input type="number" id="bidAmount" name="bidAmount" required>
            </div>
            <div>
                <label for="status">Status:</label>
                <select id="status" name="status" required>
                    <option value="Pending">Pending</option>
                    <option value="Accepted">Accepted</option>
                    <option value="Rejected">Rejected</option>
                </select>
            </div>
            <div>
                <button type="submit">Submit Proposal</button>
            </div>
        </form>
    </div>
</body>
</html>
