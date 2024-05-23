<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/register</title>
    <link rel="stylesheet" href="styles.css">
    <script src="login.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('Image\ 14.jpg'); 
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
    <header>
        <a href=""><h1>FREELANCE MARKETPLACE .</h1></a>
        </nav>
    </header>
    <div class="Form-box">
        <form class="Login-form" method="post" action="">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="login_email" required>
                <label>Email</label>
                <ion-icon name="mail-outline"></ion-icon>
            </div>
            <div class="input-box">
                <input type="password" name="login_password" required>
                <label>Password</label>
                <ion-icon name="lock-closed-outline"></ion-icon>
            </div>
            <input type="submit" class="submit-btn" name="submit" value="login">
            <h5 class="Register-btn">Don't have an account? <a href="#">Register</a></h5>
        </form>
        
        <form class="Register-form" method="post" action="register.php">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" name="username" required>
                <label>Username</label>
                <ion-icon name="person-outline"></ion-icon>
            </div>
            <div class="input-box">
                <input type="text" name="email" required>
                <label>Email</label>
                <ion-icon name="mail-outline"></ion-icon>
            </div>
            <div class="input-box">
                <input type="password" name="password" required>
                <label>Password</label>
                <ion-icon name="lock-closed-outline"></ion-icon>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="register-checkbox" required>
                <label for="register-checkbox">I agree to the terms & conditions</label>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
            <h5 class="Login-btn">Already have an account? <a href="#">Login</a></h5>
        </form>
        
        <div class="message login-message"></div>
        <div class="message register-message"></div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        let register_btn = document.querySelector(".Register-btn");
        let login_btn = document.querySelector(".Login-btn");
        let form = document.querySelector(".Form-box");

        register_btn.addEventListener("click", () => {
            form.classList.add("change-form");
        });

        login_btn.addEventListener("click", () => {
            form.classList.remove("change-form");
        });
    </script>
</body>
</html>
