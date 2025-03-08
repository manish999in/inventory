<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 15px;
        }

        .login-box {
            background-color: white;
            padding: 30px; /* Increased padding for height */
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Stronger shadow */
            max-width: 400px; /* Decreased width */
            width: 100%;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .textbox {
            margin-bottom: 20px;
        }

        .textbox label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .textbox input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 25px;
            outline: none;
        }

        .textbox input:focus {
            border-color: #007bff;
        }

        .btn {
            width: 100%;
            padding: 10px; /* Increased padding for button */
            border: none;
            border-radius: 25px;
            background-color: #e1a900;
            color: white;
            font-size: 21px;
            cursor: pointer;
            font-weight: 700;
        }

        .btn:hover {
            background-color: #ffd860;
        }

        .forgot {
            display: block;
            text-align: right;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }

        .forgot:hover {
            text-decoration: underline;
        }

        .login-box img {
            max-width: 150px;
            display: block;
            margin: 15px auto 15px;
        }

        .h3 {
            font-size: 20px;
            margin-top: 30px;
            margin-bottom: 26px;
            font-weight: 600;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div>
                <img src="https://store.totalbhakti.com/auth_panel_assets/img/logoTM.png" class="img-fluid" alt="Logo">
            </div>
            <div>
                <h3 class="h3">SIGN IN TO INVENTORY PORTAL</h3>
            </div>
            <form action="#" method="POST">
                <div class="textbox">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="textbox">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn">Login</button>
                <a href="#" class="forgot">Forgot Password?</a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
