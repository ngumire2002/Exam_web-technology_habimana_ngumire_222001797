<?php
// names: habimana, reg no: 222001797

include "connection.php";

$sql = "SELECT jobID, jobTitle, jobLocation, jobFile FROM jobs";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Job Listings</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        body {
            background-image: url(Image\ 11.jpg);
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .back-home-btn-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .back-home-btn {
            background-color: green;
            border: none;
            color: white;
            padding: 10px 20px;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            border: 2px solid green;
            outline: none;
        }

        .back-home-btn:hover {
            background-color: grey;
        }

        h1 {
            text-align: center;
            color: white;
            font-size: 36px;
            font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
            margin-bottom: 10px;
        }

        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        td {
            background-color: #fff;
        }

        .apply-btn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .apply-bt {
            background-color: blue;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .apply-b {
            background-color: red;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .apply-btn:hover {
            background-color: #45a049;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            animation: animatezoom 0.6s;
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
        }

        /* Apply and Edit Modal styles */
        .modal-content h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .modal-content p {
            color: #666;
        }

        .modal-content form input[type="text"],
        .modal-content form input[type="file"],
        .modal-content form input[type="email"],
        .modal-content form textarea,
        .modal-content form input[type="submit"],
        .modal-content form select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .modal-content form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .modal-content form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <!-- Back Home button -->
    <div class="back-home-btn-container">
        <button class="back-home-btn" onclick="window.location.href='home.php'">Back Home</button>
    </div>

    <h1>Job Listings</h1>

    <!-- TABLE CONSTRUCTION -->
    <table>
        <!-- Table header -->
        <thead>
            <tr>
                <th>Job Title</th>
                <th>Job Location</th>
                <th>Job File</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php while ($rows = $result->fetch_assoc()) { ?>
                <tr>
                    <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                    <td><?php echo $rows['jobTitle']; ?></td>
                    <td><?php echo $rows['jobLocation']; ?></td>
                    <td><?php echo $rows['jobFile']; ?></td>
                    <td>
                        <button class="apply-bt" onclick="openModal('<?php echo $rows['jobID']; ?>', '<?php echo $rows['jobTitle']; ?>', '<?php echo $rows['jobLocation']; ?>')">Edit</button>
                        <button class="apply-btn" onclick="openApplyModal('<?php echo $rows['jobTitle']; ?>', '<?php echo $rows['jobLocation']; ?>')">Apply</button>
                        <a href="delete.php?jobID=<?php echo $rows['jobID']; ?>"><button class="apply-b">Drop</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- The Apply Modal -->
    <div id="applyModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeApplyModal()">&times;</span>
            <h2>Apply for <span id="applyJobTitle"></span></h2>
            <form action="apply.php" method="post" enctype="multipart/form-data">
                <input type="hidden" id="applyJobTitleHidden" name="jobTitle">
                <label for="jobLocation">Job Location:</label><br>
                <input type="text" id="jobLocation" name="jobLocation" readonly><br>
                <label for="jobProposal">Your Proposal:</label><br>
                <textarea id="jobProposal" name="jobProposal" rows="4" cols="50" required></textarea><br>
                <label for="attachment">Attach File:</label>
                <input type="file" id="attachment" name="attachment" accept=".pdf,.doc,.docx"><br>
                <label for="paymentMethod">PaymentMethod:</label>
                <select id="paymentMethod" name="paymentMethod">
                    <option value="PayPal">PayPal</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                </select><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

    <!-- The Edit Modal -->
    <div id="editModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <form class="edit-form" action="update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" id="jobID" name="jobID">
                <label for="jobTitle">Job Title:</label>
                <input type="text" id="jobTitle" name="jobTitle" required><br>
                <label for="jobLocation">Job Location:</label>
                <input type="text" id="jobLocation" name="jobLocation" required><br>
                <label for="newJobFile">New Job File:</label>
                <input type="file" id="newJobFile" name="newJobFile" accept=".pdf,.doc,.docx"><br>
                <input type="submit" value="Save Changes">
            </form>
        </div>
    </div>

    <!-- JavaScript to handle modals -->
    <script>
        function openModal(jobID, jobTitle, jobLocation) {
            document.getElementById('editModal').style.display = 'block';
            document.getElementById('jobID').value = jobID;
            document.getElementById('jobTitle').value = jobTitle;
            document.getElementById('jobLocation').value = jobLocation;
        }

        function closeModal() {
            document.getElementById('editModal').style.display = 'none';
        }

        function openApplyModal(jobTitle, jobLocation) {
            document.getElementById('applyModal').style.display = 'block';
            document.getElementById('applyJobTitle').innerText = jobTitle;
            document.getElementById('applyJobTitleHidden').value = jobTitle;
            document.getElementById('jobLocation').value = jobLocation;
        }

        function closeApplyModal() {
            document.getElementById('applyModal').style.display = 'none';
        }
    </script>
</body>

</html>
