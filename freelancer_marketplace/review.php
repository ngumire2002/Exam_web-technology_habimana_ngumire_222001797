<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reviews</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        /* Existing CSS styles */

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

        /* Existing CSS styles */

        .modal-content form {
            background-color: blue;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            animation: animatezoom 0.6s;
        }

        /* Existing CSS styles */

        /* Background image */
        body {
            font-family: Arial, sans-serif;
            background-image: url('Image\ 7.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white; /* Ensure text is readable */
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <!-- Back Home button -->
    <!-- Existing HTML -->

    <h1>Reviews</h1>

    <!-- Add Review button -->
    <button onclick="document.getElementById('addReviewModal').style.display='block'">Add Review</button>

    <!-- Add Review Modal -->
    <div id="addReviewModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('addReviewModal').style.display='none'">&times;</span>
            <h2>Add Review</h2>
            <form id="addReviewForm" method="post">
                <div>
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div>
                    <label for="project">Project:</label>
                    <input type="text" id="project" name="project" required>
                </div>
                <div>
                    <label for="reviewer">Reviewer:</label>
                    <input type="text" id="reviewer" name="reviewer" required>
                </div>
                <div>
                    <label for="rating">Rating:</label>
                    <input type="number" id="rating" name="rating" min="1" max="5" required>
                </div>
                <div>
                    <label for="comment">Comment:</label>
                    <textarea id="comment" name="comment" rows="4" required></textarea>
                </div>
                <div>
                    <button type="submit">Submit Review</button>
                </div>
            </form>
        </div>
    </div>

    <!-- TABLE CONSTRUCTION -->
    <!-- Existing HTML -->

    <!-- PHP code for inserting review data -->
    <?php
    include "connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $date = $_POST['date'];
        $project = $_POST['project'];
        $reviewer = $_POST['reviewer'];
        $rating = $_POST['rating'];
        $comment = $_POST['comment'];

        $sql = "INSERT INTO reviews (date, project, reviewer, rating, comment) 
                VALUES ('$date', '$project', '$reviewer', '$rating', '$comment')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Review added successfully');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

    <!-- Script to close the modal when clicking outside of it -->
    <script>
        window.onclick = function(event) {
            var modal = document.getElementById('addReviewModal');
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
