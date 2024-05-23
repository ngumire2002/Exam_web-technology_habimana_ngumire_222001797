<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('Image 10.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white; /* Ensure text is readable */
            margin: 0;
            padding: 0;
        }

        header {
            text-align: center;
            padding: 20px;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        nav a, .btn {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover, .btn:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .image-container {
            position: relative;
            text-align: center;
            margin-bottom: 20px;
        }

        .custom-image {
            width: 100%;
            height: auto;
        }

        .custom-button {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 130px;
            height: 40px;
            font-weight: 500;
            padding: 10px 20px;
            font-size: 18px;
            color: white;
            background-color: rgba(0, 0, 0, 0.6);
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .custom-button:hover {
            background-color: blue;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .footer .footer-section {
            flex: 1;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php"><h1>FREELANCE MARKETPLACE</h1></a>
        <nav>
            <a href="home.php">Home</a>
            <a href="createPage.php">Create</a>
            <a href="freelancer.php">Freelancer</a>
            <a href="contact.php">Contact</a>
            <a href="about.php">About</a>
            <a href="getHired.php">Get Hired</a>
            <button class="btn" onclick="window.location.href='signOut.php'">Sign Out</button>
        </nav>
</body>
</html>
