<!--names: habimana, reg no: 222001797-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/register</title>
    <style>
        body {
            background-image: url(Image\ 7.jpeg);
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

        header {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 20px;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        .middle-text {
            position: absolute;
            top: 50%;
            left: 100%; 
            transform: translate(-50%, -50%);
            text-align: center;
            animation: moveText 10s linear infinite; 
        }

        .middle-text p {
            font-size: 36px;
            color: white;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        @keyframes moveText {
            0% {
                left: 75%; 
            }
            100% {
                left: 0; 
            }
        }
    </style>
</head>
<body>

    <div class="middle-text">
        <p>See you soon</p>
    </div>

    <script src="login.js"></script>
</body>
</html>
