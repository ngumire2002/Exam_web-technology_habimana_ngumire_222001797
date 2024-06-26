<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer marketplace</title>
    <!-- Add CSS links for styling -->
    <link rel="stylesheet" href="styles.css">
    <style>
        body{
            background-color: #db8a17;
    background-size: cover; 
    background-position: center; 
        }
        .container1 {
    max-width: 600px;
    margin: 50px auto;
    background-color: rgb(108, 7, 162);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

        h1 {
            font-size: 36px;
            color: #2a4806;
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }
        label {
            font-size: 20px;
            color: #01012b;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #a5ecf1;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #1edca9;
            width: 90px;
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            
        }
    
       
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <header>
      <nav class="navbar">
        <a href="index.html" class="navbar-brand">VBSTP</a>
        <ul class="nav-links">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="contact.html">Contact us</a></li>
          <li><a href="instructors_login.php">Instructor</a></li>
          <li><a href="admin_login.php">Admin</a></li>
          <li class="dropdown">
            <a href="login.html">Login &#9662;</a>
            <div class="dropdown-content">
              <a href="registration.html">Register</a>
            </div>
          </li>
        </ul>
      </nav>
    </header>
    

   <!--  Login form -->
   <div class="container1">
    <h1>Login Here</h1>
    <form action="login.php" method="POST">
        <label for="email">Email Address:</label>
        <input type="text" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Login" style="background-color: #14de51;"><a href="registration.html" class="nav-item nav-link" style="color: rgb(255, 0, 136);">Create Account</a>
    </form>
</div>




    <!-- Footer Section -->
    <footer class="footer">
      <div class="container2">
        <div class="left-part">
          <p class="mb-0">Designed by Trained Business Experts</p>
          <p class="mb-0">UR, RN1-HUYE</p>
          <p class="mb-0">contact@businessplatform.com</p>
          <p class="mb-0">+250 787109054</p>
        </div>
        <div class="right-part">
          <p class="mb-0">© 2024 Business Strategy Platform. All rights reserved.</p>
          <p class="mb-0">Designed by: <a href="#" target="_blank" class="fw-bold">Gilbert</a></p>
          <p class="mb-0">Distributed by: <a href="#" target="_blank" class="fw-bold">Gilbert</a></p>
        </div>
      </div>
    </footer>
    
    

    <!-- Add JavaScript links if needed -->
    <script src="script.js"></script>
</body>

</html>