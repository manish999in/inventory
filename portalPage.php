<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <style>
        body {
            background: #eef1f9;
            font-family: "Raleway", sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .heading {
            margin-top: 30px;
            text-align: center;
            margin-bottom: 40px;
        }

        .profile {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
        }

        .profile1 {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .profilelogo {
            border: 1px solid black;
            font-size: 50px;
            padding: 18px;
            border-radius: 50%;
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
            background-color: rgb(30 71 131 / 89%);
        }

        .editProfile,
        .learnmore {
            text-align: center;
            margin-top: 20px;
        }

        .editProfile button {
            margin-top: 73px;
            background-color: grey;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            width: 213px;
        }

        .learnmore a {
            color: blue;
            text-decoration: none;
        }

        .learnmore {
            margin-top: 10px;
        }
        
    </style>
</head>

<body>
    <div class="main">
        <div class="heading">
            <h1>Sanskar Portal</h1>
        </div>
        <div class="profile">
            <div class="profile1">
                <div class="profilelogo">
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="profileName">
                    Inventroy Portal
                </div>
            </div>
            <div class="profile1">
                <div class="profilelogo">
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="profileName">
                    Employee Portal
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>