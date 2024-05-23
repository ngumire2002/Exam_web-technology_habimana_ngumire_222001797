<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Add any additional styling for the About Us page here */
        .about-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            color: blue;
        }

        p {
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <header>
        <!-- Include navigation if needed -->
        <h1>About Us</h1>
    </header>

    <div class="about-container">
        <h2>Our Story</h2>
        <p>Our journey as freelancers began with a passion for creativity and a drive for independence. Overcoming challenges and honing our skills, we ventured into the freelance world, eager to make our mark. Through perseverance and dedication, we built a thriving business, collaborating with clients worldwide. With each project, we grow stronger, learning, adapting, and evolving. Our story is one of resilience, innovation, and the pursuit of excellence, shaping our identity as trusted partners in the freelance community.</p>

        <h2>Our Mission</h2>
        <p> is to deliver exceptional results, foster lasting relationships, embrace innovation, ensure client satisfaction, empower others, and make a positive impact. We aim to be reliable, resourceful, and results-driven partners, driving mutual success for our clients and the freelancing community..</p>

        <h2>Our Team</h2>
        <p>Meet our team of dedicated professionals who strive to make our freelance marketplace the best platform for both freelancers and clients.</p>
        
        <?php
        // Example PHP code to fetch and display team member details from a database
        // Replace this with actual code to fetch team member data
        $teamMembers = [
            ['name' => 'ngumire', 'position' => 'CEO'],
            ['name' => 'Jane ', 'position' => 'MD'],
            ['name' => 'David ', 'position' => 'Head Developer'],
            // Add more team members as needed
        ];

        // Loop through the team members and display their details
        foreach ($teamMembers as $member) {
            echo "<p><strong>{$member['name']}</strong> - {$member['position']}</p>";
        }
        ?>
    </div>

    <footer>
        <!-- Include footer content if needed -->
    </footer>
</body>
</html>
