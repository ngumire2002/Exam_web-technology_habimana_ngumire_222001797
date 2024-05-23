<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
    <!-- Add your CSS styles here -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('Image\ 10.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 20px;
            box-sizing: border-box;
            color: darkblue; 
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.8); /* Add a white background with transparency */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: black; /* Ensures form text color is black */
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
        input[type="date"],
        select,
        button {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
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

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
            background: rgba(255, 255, 255, 0.8); /* Add background with transparency for readability */
        }

        th {
            background: rgba(0, 0, 0, 0.1); /* Slightly darker background for table headers */
        }
    </style>
</head>
<body>
    <form id="paymentForm" method="post">
        <div>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div>
            <label for="freelancer">Freelancer:</label>
            <input type="text" id="freelancer" name="freelancer" required>
        </div>
        <div>
            <label for="client">Client:</label>
            <input type="text" id="client" name="client" required>
        </div>
        <div>
            <label for="amount">Amount ($):</label>
            <input type="number" id="amount" name="amount" required>
        </div>
        <div>
            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="Pending">Pending</option>
                <option value="Completed">Completed</option>
                <option value="Cancelled">Cancelled</option>
            </select>
        </div>
        <div>
            <button type="submit">Add Payment</button>
        </div>
    </form>

    <?php
    // Include database connection
    include "connection.php";

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and retrieve form data
        $date = $conn->real_escape_string($_POST['date']);
        $freelancer = $conn->real_escape_string($_POST['freelancer']);
        $client = $conn->real_escape_string($_POST['client']);
        $amount = $conn->real_escape_string($_POST['amount']);
        $status = $conn->real_escape_string($_POST['status']);

        // Insert payment data into the database
        $sql = "INSERT INTO payment (date, freelancer, client, amount, status) VALUES ('$date', '$freelancer', '$client', '$amount', '$status')";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Payment added successfully!</p>";
        } else {
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }
    }

    // Fetch and display payments from the database
    $sql = "SELECT date, freelancer, client, amount, status FROM payment";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<thead><tr><th>Date</th><th>Freelancer</th><th>Client</th><th>Amount</th><th>Status</th></tr></thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['freelancer'] . "</td>";
            echo "<td>" . $row['client'] . "</td>";
            echo "<td>" . $row['amount'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<p>No payments found.</p>";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
