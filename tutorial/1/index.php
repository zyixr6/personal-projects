<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Flipper</title>
    <style>
        body {
            text-align: center;
        }

        h3 {
            font-size: 3rem;
        }

        button {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            min-width: 200px;
            padding: 10px;
            font-size: 2rem;
        }


        #green {
            background-color: white;
            border-color: green;
        }

        #red {
            background-color: white;
            border-color: red;
        }

        #blue {
            background-color: white;
            border-color: blue;
        }

        #raveBtn {
            background-color: white;
            border-color: grey;
        }

        button#green:hover {
            background-color: green;
            border-color: black;
        }

        button#red:hover {
            background-color: red;
            border-color: black;
        }

        button#blue:hover {
            background-color: blue;
            border-color: black;
        }

        button#raveBtn:hover {
            background-color: grey;
            border-color: black;
        }
    </style>
</head>

<body>
    <h3>Color Flipper</h3>
    <button id="green" onclick="colorChanger(`green`)">Green</button>
    <button id="red" onclick="colorChanger(`red`)">Red</button>
    <button id="blue" onclick="colorChanger(`blue`)">Blue</button>
    <button id="raveBtn" onclick="raveMode()">Rave Mode</button>
</body>
<script src="script.js"></script>

</html>