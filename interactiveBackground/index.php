<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Background</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            background-color: #282c34;
            color: white;
            font-family: Arial, sans-serif;
        }

        main {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card {
            width: 400px;
            height: 400px;
            background-color: white;
            border-radius: 10px;
            position: fixed;
        }
    </style>
</head>

<body>
    <main>
        <h1 style="padding: 10vh;">Interactive Cube</h1>
        <div class="card" id="card"></div>
    </main>
    <script src="script.js"></script>
</body>

</html>