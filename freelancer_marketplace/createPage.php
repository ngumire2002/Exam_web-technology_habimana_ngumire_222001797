<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(Image\ 8.png);
            background-size: cover;
            background-position: center;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }
        
        @keyframes colorChange {
            0% {
                background-position: 0% 50%;
            }
            100% {
                background-position: 100% 50%;
            }
        }
        
        h1 {
            background: linear-gradient(to right, #ff00cc, #3333ff, #00ccff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: colorChange 5s infinite linear;
            margin-right: 20px;
            padding: 0;
            display: inline-block;
        }
        
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 90%;
            display: flex;
            justify-content: space-between;
            font-size: 20px;
            padding: 40px 60px;
            color: black;
        }
        
        header nav {
            width: 55%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 26px;
        }
        
        header nav a {
            color: green;
            text-decoration: none;
            position: relative;
        }
        
        header nav a::before {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 0;
            background-color: white;
            width: 0%;
            height: 2.5px;
            transition: .3s;
        }
        
        header nav a:hover::before {
            width: 100%;
        }
        
        .btn {
            width: 130px;
            height: 40px;
            font-weight: 500;
            background: rgba(255, 255, 255, 0.4);
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: .3s ease;
        }
        
        .btn:hover {
            background: gray;
        }
        
        .jobCreate {
            margin: 140px auto;
            width: 80%;
            max-width: 600px;
            background-color: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
        }
        
        .jobCreate h1 {
            text-align: center;
        }
        
        .JobSubmission-form {
            display: flex;
            flex-direction: column;
        }
        
        .input-box {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }
        
        .input-box input,
        .input-box textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-top: 5px;
        }
        
        .input-box label {
            margin-bottom: 5px;
        }
        
        .submit-btn {
            background-color: #ffffff;
            color:#45a049;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s;
        }
        
        .submit-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php">
            <h1>FREELANCE MARKETPLACE</h1>
        </a>
        <nav>
            <a href="home.php">Home</a>
            <a href="createPage.php">Create</a>
            <a href="freelancer.php">freelancer</a>
            <a href="getHired.php">Get Hired</a>
            <button class="btn" onclick="window.location.href='signOut.php'">Sign Out</button>
        </nav>
    </header>
    <div class="jobCreate">
        <form class="JobSubmission-form" action="create.php" method="POST" enctype="multipart/form-data">
            <h1>Job Creation</h1>
            <div class="input-box">
                <label for="jobTitle">Job Title</label>
                <input type="text" id="jobTitle" name="jobTitle" required>
            </div>
            <div class="input-box">
                <label for="jobLocation">Job Location</label>
                <input type="text" id="jobLocation" name="jobLocation" required>
            </div>
            <div class="input-box">
                <label for="jobFile">Upload Job Description File</label>
                <input type="file" id="jobFile" name="jobFile" accept=".txt, .pdf, .doc, .docx" required>
                <small>(Accepts .txt, .pdf, .doc, .docx files)</small>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>
